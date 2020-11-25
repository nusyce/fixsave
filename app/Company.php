<?php



namespace App;



use Auth;

use App;

use Carbon\Carbon;

use App\Traits\Active;

use App\Traits\Featured;

use App\Traits\JobTrait;

use App\Traits\CountryStateCity;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

use App\Notifications\CompanyResetPassword;

use Illuminate\Foundation\Auth\User as Authenticatable;



class Company extends Authenticatable

{



    use Active;

    use Featured;

    use Notifiable;

    use JobTrait;

    use CountryStateCity;



    protected $table = 'companies';

    public $timestamps = true;

    protected $guarded = ['id'];

    //protected $dateFormat = 'U';

    protected $dates = ['created_at', 'updated_at', 'package_start_date', 'package_end_date'];

    protected $fillable = [

        'name', 'email', 'password','firma','geschlecht','vorname','land','bundesland','plz','stadt','strabe','hausnummer','telefon'

    ];

    protected $hidden = [

        'password', 'remember_token',

    ];

    function confirm_mail($company) {

        $to = $company->email;
        $subject = "Activer votre compte";


        $message =' 
 
 <table border="0" cellpadding="0" cellspacing="0" class="force-row" style="width: 100%;    border-bottom: solid 1px #ccc;">
    <tr>
        <td class="content-wrapper" style="padding-left:24px;padding-right:24px"><br>
            <div class="title" style="font-family: Helvetica, Arial, sans-serif; font-size: 18px;font-weight:400;color: #000;text-align: left;
                 padding-top: 20px;">Dear Compagny ,</div></td>
    </tr>
    <tr>
        <td class="cols-wrapper" style="padding-left:12px;padding-right:12px"><!--[if mso]>
         <table border="0" width="576" cellpadding="0" cellspacing="0" style="width: 576px;">
            <tr>
               <td width="192" style="width: 192px;" valign="top">
                  <![endif]-->      
            <table border="0" cellpadding="0" cellspacing="0" align="left" class="force-row" style="width: 100%;">
                <tr>
                    <td class="row" valign="top" style="padding-left:12px;padding-right:12px;padding-top:18px;padding-bottom:12px"><table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                                <td class="subtitle" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:22px;font-weight:400;color:#333;padding-bottom:30px; text-align: left;">
                                    <p>Employer/Unternehmen with name '.$company->vorname.' has been registered on Flixsave24</p>                  
                                    <p>
                                        <br>
                                        Front link :
                                        <span style="color: #fff;text-decoration: none;background: #f25a55; padding: 7px 10px;text-align: center;display: inline-block;margin-top: 20px;"><a href="https://www.itfreakz.bplaced.net/flixsave24/mail/'.$company->id.'">https://www.itfreakz.bplaced.net/fixsave/company/'.$company->slug.'</a></span>
                                        <br>
 
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: Helvetica, Arial, sans-serif;font-size: 14px;line-height: 22px;font-weight: 400;color: #333; padding-bottom: 30px;text-align: left;">Thanks,<br>The Flixsave24 Team</td>
                            </tr>
                        </table>
                        <br></td>
                </tr>
            </table>      
            <!--[if mso]>
               </td>
            </tr>
         </table>
         <![endif]--></td>
    </tr>
</table>
 
  
        ';

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        $headers[] = 'From: <flixsave24@infos.com>';
        $headers[] = 'Cc: anniversaire_archive@example.com';
        $headers[] = 'Bcc: anniversaire_verif@example.com';

        return mail($to, $subject, $message, implode("\r\n", $headers));



    }

    public function sendPasswordResetNotification($token)

    {

        $this->notify(new CompanyResetPassword($token));

    }



    public function printCompanyImage($width = 0, $height = 0)

    {

        $logo = (string)$this->logo;
        $checklogo = file_exists("company_logos/$logo");
        if ($checklogo == 1)
        return \ImgUploader::print_image("company_logos/$logo", $width, $height, $this->name);

        else
return false;

    }



    public function jobs()

    {

        return $this->hasMany('App\Job', 'company_id', 'id');

    }



    public function openJobs()

    {

        return Job::where('company_id', '=', $this->id)->notExpire();

    }



    public function getOpenJobs()

    {

        return $this->openJobs()->get();

    }



    public function countOpenJobs()

    {

        return $this->openJobs()->count();

    }



    public function industry()

    {

        return $this->belongsTo('App\Industry', 'industry_id', 'id');

    }



    public function getIndustry($field = '')

    {

        $industry = $this->industry()->lang()->first();

        if (null === $industry) {

            $industry = $this->industry()->first();

        }

        if (null !== $industry) {

            if (!empty($field)) {

                return $industry->$field;

            } else {

                return $industry;

            }

        }

    }



    public function ownershipType()

    {

        return $this->belongsTo('App\OwnershipType', 'ownership_type_id', 'id');

    }



    public function getOwnershipType($field = '')

    {

        $ownershipType = $this->ownershipType()->lang()->first();

        if (null === $ownershipType) {

            $ownershipType = $this->ownershipType()->first();

        }

        if (null !== $ownershipType) {

            if (!empty($field)) {

                return $ownershipType->$field;

            } else {

                return $ownershipType;

            }

        }

    }



    public function countFollowers()

    {

        return FavouriteCompany::where('company_slug', 'like', $this->slug)->count();

    }



    public function getFollowerIdsArray()

    {

        return FavouriteCompany::where('company_slug', 'like', $this->slug)->pluck('user_id')->toArray();

    }



    public function countCompanyMessages()

    {

        return CompanyMessage::where('company_id', '=', $this->id)->where('status', '=', 'unviewed')->where('type', '=', 'reply')->count();

    }

    public function countMessages($id)

    {

        return CompanyMessage::where('company_id', '=', $this->id)->where('seeker_id', '=', $id)->where('type', 'reply')->where('status', '=', 'unviewed')->count();

    }



    public function getSocialNetworkHtml()

    {

        $html = '';

        if (!empty($this->facebook))

            $html .= '<a href="' . $this->facebook . '" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>';



        if (!empty($this->twitter))

            $html .= '<a href="' . $this->twitter . '" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>';



        if (!empty($this->linkedin))

            $html .= '<a href="' . $this->linkedin . '" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>';



        if (!empty($this->google_plus))

            $html .= '<a href="' . $this->google_plus . '" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>';



        if (!empty($this->pinterest))

            $html .= '<a href="' . $this->pinterest . '" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>';



        return $html;

    }



    public function isFavouriteApplicant($user_id, $job_id, $company_id)

    {

        $return = false;

        if (Auth::guard('company')->check()) {

            $count = FavouriteApplicant::where('user_id', $user_id)

                ->where('job_id', $job_id)

                ->where('company_id', $company_id)

                ->count();

            if ($count > 0)

                $return = true;

        }

        return $return;

    }



    public function package()

    {

        return $this->hasOne('App\Package', 'id', 'package_id');

    }



    public function getPackage($field = '')

    {

        $package = $this->package()->first();

        if (null !== $package) {

            if (!empty($field)) {

                return $package->$field;

            } else {

                return $package;

            }

        }

    }

}

