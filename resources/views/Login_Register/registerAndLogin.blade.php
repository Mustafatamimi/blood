<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Blood Bank System</title>
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css ')}} ">
        <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/login-all.css ')}}">
        <link rel="stylesheet" href="{{URL::asset('css/upper-bar.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/cont-footer-copy.css')}}">

       <style>
           .addScroll{
               overflow-y: auto;
           }
       </style>

    </head>

 <body dir="rtl">
       <!--Start Upper Bar-->
    <div  class="upper-bar">
        <div class="container">
            <div class="row">
                <!-- under small view the column will be under each other -->
                <div class="info col-md  text-center text-sm-right">
                    <span class="get-quote">تبرع</span>
                    <span> (ومن أحياها فكأنما أحيا الناس جميعا) </span>

                </div>

                <div class="info col-md text-center text-sm-left">
                <i class="fa fa-handshake fa-3x fa-fw rounded-circle"></i>
                <span>البوابة اليمنية للتبرع بالدم</span>
                </div>
            </div>
        </div>
    </div>
    <!--End Upper Bar-->

     <!--start top logo-->
     <div class="container text-center">
       <div class="topLogo">
            <span>Blood</span>
            <span class="text-bank">Bank</span>
             <p calss="text-ar">
                <img src="images/pulse_50px.png"  width="35px" height="30px" alt="Image" >
                <span style="color: #08526d;">  بنك </span> <span style="color: #ec1c23;">الدم </span>
                 <img src="images/drop_of_blood_30px.png"  width="25px" height="20px" alt="Image" >
             </p>
        </div>
     </div>
     <!--end top logo-->

     <!--satrt form [registration-login-create account]-->
            <div class="login container">
            <!--start content login-regestration-->
                   <div class="formBx">
                        <!--start topForm toggle-->
                         <div class="nav_content">
                            <ul>
                                <li   class="register-login-data active" id="0">تسجيل دخول</li>
                                <li   class="craete-donor-account" id="1"> إنشاء حساب كمتبرع للدم</li>
                                <li   class="craete-seeker-account" id="2"> إنشاء حساب كمحتاج للدم</li>
                                <li   class="craete-hospital-account" id="3"> إنشاء حساب مستشفى</li>
                            </ul>
                         </div>
                          <!--end topForm toggle-->
                         <!--satrt login -->
                        <div class="login-for-donorAndSeekerAndHospitals tab">
                            <div class="row">
                                <div class="col-sm-6 addressLogin">
                                    <h4>تسجيل الدخول</h4>
                                </div>
                                <div class="col-sm-6 addressLogin">
                                    <a href="website.html"> <i class="fa fa-home"></i> الرئيسيه</a>
                                </div>
                            </div>
                            <hr>
                            <form method="POST" id="login-donor-form" >
                               <div class="modal-content">
                                     <div class="modal-header">
                                        <h4 class="text-center" style="color: #ec1c23;">رسالة خطأ</h4>
                                    </div>
                                    <div class="modal-body addScroll">
                                        <div class="inputBx form-group">
                                            <label for="donorLoginuserName">إسم المستخدم:</label>
                                            <input type="text" class="form-control"  id="donorLoginuserName" placeholder="إسم المستخدم" name="donorLoginuserName" required >
                                            <div class="valid-feedback"></div>
                                            <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                        </div>
                                        <div class="inputBx form-group">
                                                <label for="donorLoginPassword">كلمة المرور:</label>
                                                <input type="password" class="form-control" id="donorLoginPassword" placeholder="كلمة المرور" name="donorLoginPassword" required >
                                                <div class="valid-feedback"></div>
                                                <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="text-center container">
                                            <a href="#" class="">نسيت كلمة السر</a>
                                            <span>|</span>
                                            <input type="checkbox" class="remember"> تذكرني
                                        </div>
                                        <div class="inputBx">
                                            <input type="submit" value="دخول" name="loginToDonorProfile" class=" btn btn-success">
                                        </div>
                                    </div>
                                </div>
                            </form>
                      </div>
                       <!--end login -->

                      <!--satrt create account for donor-->
                      <div class="creat-donor-account tab" id="creat-donor-account1">
                        <div class="row">
                            <div class="col-sm-6 addressCreate">
                                <h4 > إنشاء حساب جديد كمتبرع بالدم</h4>
                            </div>
                            <div class="col-sm-6 addressCreate">
                                <a href="website.html"> <i class="fa fa-home"></i> الرئيسيه</a>
                            </div>
                        </div>
                            <hr>
                            <form method="" id="account_donor_form" >
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-body addScroll">
                                        <div class="inputBx form-group">
                                            <label for="donorName">إسم المستخدم:</label>
                                            <input type="text" class="form-control"  id="donorName" placeholder="إسم المستخدم" name="donorUserName"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="infDonorName">الإسم:</label>
                                            <input type="text" class="form-control"  id="infDonorName"   placeholder="الإسم الكامل" name="donorName"  >

                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="donorPhone">رقم الهاتف:</label>
                                            <input type="number" class="form-control" id="donorPhone" name="donorPhone"  >
                                        </div>
                                        <div class="inputBx form-group">
                                                <label for="donorPwd">كلمة المرور:</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="كلمة المرور" name="donorPass"  >
                                        </div>
                                        <div class="inputBx form-group">
                                                <label for="cdonorPwd">تأكيد كلمة المرور:</label>
                                                <input type="password" class="form-control" id="cdonorPwd" placeholder="تأكيد كلمة المرور" name="donorPassCh"  >

                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="donorBloodg">فصيلة الدم:</label>
                                            <select class="form-control" id="donorBloodg" name="donorGroupType">
                                                <option >A+</option>
                                                <option >A-</option>
                                                <option >O+</option>
                                                <option >O-</option>
                                                <option >B+</option>
                                                <option >B-</option>
                                                <option >AB+</option>
                                                <option >AB-</option>
                                            </select>
                                            </div>
                                        <div class="inputBx form-group">
                                                <label for="donorDate">تاريخ الميلاد:</label>
                                                <input type="date" class="form-control" id="donorDate" placeholder="تاريخ الميلاد" name="donorAge"  >
                                        </div>
                                        <div class="inputBx form-group">
                                                <label>الجنس:</label>
                                                <br>
                                                <div  class="form-control" style="display: flex;align-items: center;justify-content: center;">
                                                    <input  type ="radio" name = "donorSexd"  value = "ذكر" checked>
                                                    <span class="lradio">ذكر</span>
                                                    <input type = "radio" name = "donorSexd" value = "أنثى">
                                                    <span class="lradio" >أنثى </span>
                                                </div>
                                        </div>
                                        <div class="inputBx form-group">
                                            <label> المحافظةالمتواجد فيها حاليا:</label>
                                            <select class="form-control" id="donorCity" name="donorCity">
                                                <option >تعز</option>
                                                <option >صنعاء</option>
                                                <option >عدن</option>
                                                <option >أمانة العاصمة</option>
                                                <option >شبوه</option>
                                                <option >حضرموت</option>
                                                <option >إب</option>
                                                <option >الضالع</option>
                                                <option >لحج</option>
                                                <option >أرخبيل سقطرى</option>
                                                <option >المهره</option>
                                                <option >صعده</option>
                                                <option >ريمه</option>
                                                <option >مأرب</option>
                                                <option >حجه</option>
                                                <option >ذمار</option>
                                                <option >أبين</option>
                                                <option >المحويت</option>
                                                <option >الجوف</option>
                                                <option >الحديده</option>
                                                <option >البيضاء</option>
                                                <option >عمران</option>
                                            </select>
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="donorNeighbor">المكان الذي تتواجد فيه حاليا:</label>
                                            <input type="text" class="form-control" id="donorNeighbor" placeholder="المديريه-الحي" name="donorStreet"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="donorEmail">البريد الإلكتروني:</label>
                                            <input type="email" class="form-control" id="donorEmail" placeholder="البريد الإلكتروني" name="donorEmail"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label>هل تود السماح لإظهار بياناتك لل:</label>
                                            <br>
                                            <div class="form-control"  style="display: flex;align-items: center;justify-content: center;">
                                                <input  type ="radio" name = "donorIsShow"  value = "للجميع" checked>
                                                <span class="lradio">للجميع</span>
                                                <input type = "radio" name = "donorIsShow" value = "للمستشفيات">
                                                <span class="lradio" >للمستشفيات</span>
                                            </div>
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="donorLastDate">هل قمت بالتبرع من قبل؟أدخل تاريخ التبرع:</label>
                                            <input type="date" class="form-control" id="donorLastDate" placeholder="أخر مره تبرعت فيها" name="donorLastDate"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="upic">إختر صورة -خياري:</label>
                                            <input type="file" id="upic" name="donorPhoto" placeholder="">
                                        </div>
                                        <div class="inputBx form-group form-check">
                                                <div  class="form-control lach">
                                                <label  class="form-check-label"> أوافق على الشروط</labe>
                                                <input   class="form-check-input" type="checkbox" name="remember" required>
                                                </div>
                                                <div class="valid-feedback">شكرا لموافقتك على كل الشروط</div>
                                                <div class="invalid-feedback">الرجاء الموافقه على الشروط.</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="text-center container">
                                            <span>إقرأ شروط الاستخدام وملاحظات هامة</span>
                                            <span>|</span>
                                            <a href="#rulesDonor" data-toggle="modal"> ذهاب</a>
                                        </div>
                                        <div class="inputBx">
                                            <button  id="bt_addDonor" name="addNewDonorAccount" class=" btn btn-success"> إنشاء حساب</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                     </div>
                      <!--end create account for donor-->

                      <!--start create account for seeker-->
                      <div class="creat-seeker-account tab">
                        <div class="row">
                            <div class="col-sm-6 addressCreate">
                                <h4 > إنشاء حساب جديد كمحتاج للدم</h4>
                            </div>
                            <div class="col-sm-6 addressCreate">
                                <a href="website.html"> <i class="fa fa-home"></i> الرئيسيه</a>
                            </div>
                        </div>
                            <hr>
                            <form method="" id="account_seeker_form" >
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-body addScroll">
                                        <div class="inputBx form-group">
                                            <label for="userSeekerName">إسم المستخدم:</label>
                                            <input type="text" class="form-control"  id="userSeekerName" placeholder="إسم المستخدم" name="seekerUserName" >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="infٍSeekername">إسم المريض:</label>
                                            <input type="text" class="form-control"  id="infٍSeekername"  placeholder="إسم المريض" name="seekerName" >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerPhone">رقم الهاتف:</label>
                                            <input type="number" class="form-control" id="seekerPhone"  name="seekerPhone" >
                                        </div>
                                        <div class="inputBx form-group">
                                                <label for="seekerPwd">كلمة المرور:</label>
                                                <input type="password" class="form-control" id="seekerPwd" placeholder="كلمة المرور" name="seekerPass" >
                                        </div>
                                        <div class="inputBx form-group">
                                                <label for="cSeekerPwd">تأكيد كلمة المرور:</label>
                                                <input type="password" class="form-control" id="cSeekerPwd" placeholder="تأكيد كلمة المرور" name="seekerPassCh"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerDateB">تاريخ الميلاد:</label>
                                            <input type="date" class="form-control" id="seekerDate" placeholder="تاريخ الميلاد" name="seekerAge"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerBloodg">فصيلة الدم:</label>
                                            <select class="form-control" name="seekerGroupType">
                                                <option >A+</option>
                                                <option >A-</option>
                                                <option >O+</option>
                                                <option >O-</option>
                                                <option >B+</option>
                                                <option >B-</option>
                                                <option >AB+</option>
                                                <option >AB-</option>
                                            </select>
                                            </div>
                                        <div class="inputBx form-group">
                                                <label>الجنس:</label>
                                                <br>
                                                <div  class="form-control" style="display: flex;align-items: center;justify-content: center;">
                                                    <input  type ="radio" name = "seekerSexd"  value = "ذكر" checked>
                                                    <span class="lradio">ذكر</span>
                                                    <input type = "radio" name = "seekerSexd" value = "أنثى">
                                                    <span class="lradio" >أنثى </span>
                                                </div>
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerDateNeed">أدخل بالضبط التاريخ الذي تكون فيه بحاجة للدم:</label>
                                            <input type="date" class="form-control" name="seekerDateNeed" id="seekerDateNeed" placeholder="(إذا كنت بحاجة طارئه أدخل تاريخ اليوم أو إبحث عن متبرعين في الموقع)اليوم الذي تحتاج فيه للدم"   >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerCity"> المحافظةالمتواجد فيها حاليا:</label>
                                            <select class="form-control" id="seekerCity" name="seekerCity">
                                                <option >تعز</option>
                                                <option >صنعاء</option>
                                                <option >عدن</option>
                                                <option >أمانة العاصمة</option>
                                                <option >شبوه</option>
                                                <option >حضرموت</option>
                                                <option >إب</option>
                                                <option >الضالع</option>
                                                <option >لحج</option>
                                                <option >أرخبيل سقطرى</option>
                                                <option >المهره</option>
                                                <option >صعده</option>
                                                <option >ريمه</option>
                                                <option >مأرب</option>
                                                <option >حجه</option>
                                                <option >ذمار</option>
                                                <option >أبين</option>
                                                <option >المحويت</option>
                                                <option >الجوف</option>
                                                <option >الحديده</option>
                                                <option >البيضاء</option>
                                                <option >عمران</option>
                                            </select>
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerNeighbor">المكان الذي تتواجد فيه حاليا:</label>
                                            <input type="text" class="form-control" id="seekerNeighbor" placeholder="المديريه-الحي" name="seekerStreet"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerEmail">البريد الإلكتروني:</label>
                                            <input type="email" class="form-control" id="seekerEmail" placeholder="البريد الإلكتروني" name="seekerEmail"  >
                                        </div>
                                        <div class="inputBx form-group">
                                            <label for="seekerNote"> ملاحظات إظافية</label>
                                            <textarea type="text" name="seekerNote"  class="form-control" id="seekerNote" placeholder="أدخل بعض المعلومات ! لماذا الحاجة للدم ومكان المستشفى الذ سيكون متواجدا فيه المريض" ></textarea>
                                        </div>
                                        <div class="inputBx form-group form-check">
                                                <div  class="form-control lach">
                                                <label  class="form-check-label"> أوافق على الشروط</labe>
                                                <input   class="form-check-input" type="checkbox" name="remember" required>
                                                </div>
                                                <div class="valid-feedback">شكرا لموافقتك على كل الشروط</div>
                                                <div class="invalid-feedback">الرجاء الموافقه على الشروط.</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="text-center container">
                                            <span>إقرأ شروط الاستخدام وملاحظات هامة</span>
                                            <span>|</span>
                                            <a href="#rulesDonor" data-toggle="modal"> ذهاب</a>
                                        </div>
                                        <div class="inputBx">
                                            <button  id="bt_addSeeker" name="addNewSeekerAccount" class=" btn btn-success"> إنشاء حساب</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                     </div>
                     <!--end create account for seekers-->

                     <!--start create account for hospitals-->
                      <div class="login-for-hospital tab">
                        <div class="row">
                            <div class="col-sm-6 addressCreate">
                                <h4> إنشاء حساب جديد لمستشفى</h4>
                            </div>
                            <div class="col-sm-6 addressCreate">
                                <a href="website.html"> <i class="fa fa-home"></i> الرئيسيه</a>
                            </div>
                        </div>
                        <hr>
                        <form method=" " id="account_hospital_form" >
                            @csrf
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="inputBx form-group">
                                        <label for="infHospitalName">إسم المستفى:</label>
                                        <input type="text" class="form-control"  id="infHospitalName"  placeholder="الإسم الكامل" name="HospitalName" >
                                    </div>
                                    <div class="inputBx form-group">
                                        <label for="hospitaEmail">البريد الإلكتروني:</label>
                                        <input type="email" name="hospitaEmail" class="form-control" id="hospitaEmail" placeholder="البريد الإلكتروني(إستخدمه في تسجيل الدخول بدلا من إسم المستخدم)"  >
                                    </div>
                                    <div class="inputBx form-group">
                                        <label for="hospitalPwd">كلمة المرور:</label>
                                        <input type="password" class="form-control" id="hospitalPwd" placeholder="كلمة المرور" name="hospitalPass"  >
                                   </div>
                                    <div class="inputBx form-group">
                                            <label for="cHospitalPwd">تأكيد كلمة المرور:</label>
                                            <input type="password" class="form-control" id="cHospitalPwd" placeholder="تأكيد كلمة المرور" name="hospitalPassCh"  >
                                    </div>
                                    <div class="inputBx form-group">
                                        <label for="hospitalPhone">رقم الهاتف:</label>
                                        <input type="number" class="form-control" id="hospitalPhone" placeholder="رقم الهاتف" name="hospitalPhone" >
                                    </div>
                                    <div class="inputBx form-group">
                                        <label for="hospitalCity"> المحافظة:</label>
                                        <select class="form-control" id="hospitalCity" name="hospitalCity">
                                            <option >تعز</option>
                                            <option >صنعاء</option>
                                            <option >عدن</option>
                                            <option >أمانة العاصمة</option>
                                            <option >شبوه</option>
                                            <option >حضرموت</option>
                                            <option >إب</option>
                                            <option >الضالع</option>
                                            <option >لحج</option>
                                            <option >أرخبيل سقطرى</option>
                                            <option >المهره</option>
                                            <option >صعده</option>
                                            <option >ريمه</option>
                                            <option >مأرب</option>
                                            <option >حجه</option>
                                            <option >ذمار</option>
                                            <option >أبين</option>
                                            <option >المحويت</option>
                                            <option >الجوف</option>
                                            <option >الحديده</option>
                                            <option >البيضاء</option>
                                            <option >عمران</option>
                                        </select>
                                    </div>

                                    <div class="inputBx form-group">
                                        <label for="hospitarNeighbor">الموقع:</label>
                                        <input type="text" class="form-control" id="hospitarNeighbor" placeholder="المديريه-الحي" name="hospitalStreet" >
                                    </div>
                                    <div class="inputBx form-group">
                                        <label>هل تود السماح لإظهار بياناتك لل:</label>
                                        <br>
                                        <div class="form-control"  style="display: flex;align-items: center;justify-content: center;">
                                        <input  type ="radio" name = "hospitalIsShow"  value = "للجميع">
                                        <span class="lradio">للجميع</span>
                                        <input type = "radio" name = "hospitalIsShow" value = "للمستشفيات">
                                        <span class="lradio" >للمستشفيات</span>
                                        </div>
                                    </div>
                                    <div class="inputBx form-group">
                                        <label for="hospitalPic">إختر صورة -خياري:</label>
                                        <input type="file" id="hospitalPic" name="hospitalPhoto" placeholder="">
                                    </div>
                                    <div class="inputBx form-group form-check">
                                            <div  class="form-control lach">
                                            <label  class="form-check-label"> أوافق على الشروط</labe>
                                            <input   class="form-check-input" type="checkbox" name="remember" required>
                                            </div>
                                            <div class="valid-feedback">شكرا لموافقتك على كل الشروط</div>
                                            <div class="invalid-feedback">الرجاء الموافقه على الشروط.</div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="text-center container">
                                        <span>إقرأ شروط الاستخدام وملاحظات هامة</span>
                                        <span>|</span>
                                        <a href="#rulesHospital"  data-toggle="modal">ذهاب</a>
                                    </div>
                                    <div class="inputBx">
                                        <button  id="bt_addHospital" name="addNewHospitalAccount" class=" btn btn-success"> إنشاء حساب</button>                                    </div>
                                </div>
                            </div>
                        </form>
                  </div>
                     <!--end create account for hospitals-->
             </div>
            <!--end content login Of [Donors And seekers and hospitals]-->
         </div>
          <!--end form [registration-login-create account]-->

          <!--start messages[rules] modals for all-->
           <!--for donor and seeker crate account-->
            <div id="rulesDonor" class="modal fade" id="customDrage">
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" style="color: #ec1c23;">&times;</button>
                            <h4 style="font-weight: bold; color: #555;">الشروط والتعليمات</h4>
                        </div>
                        <div class="modal-body text-right">
                          <p style="font-weight: bold; color: #777;"> <span  style="color:#ec1c23; font-weight: bold;">-</span>إن إنشائك للحساب يتطلب إدخالك رقما صحيحا خاصا بك حتى تقوم بإستقبال الكود الخاص للدخول</p>
                          <p style="font-weight: bold; color: #777;"> <span  style="color:#ec1c23; font-weight: bold;">-</span>إن إنشائك للحساب يمكنك من تحديث معلوماتك أثناء الحاجة</p>
                          <h5>ملاحظة</h5>
                          <p style="font-weight: bold; color: #777;"><span  style="color:#ec1c23; font-weight: bold;">-</span>إن هذا الموقع يعتبر همزة وصل بين الباحثين عن متبرعين للدم والمتبرعين أنفسهم وكذالك المستشفيات وبموافقتك فإن  الموقع غير مسؤول عن أي بيانات خاطئه أو مغلوطه</p>
                          <p style="font-weight: bold; color: #777;"> <span  style="color:#ec1c23; font-weight: bold;">-</span>إستخدم إسم المستخدم وكلمة المرور التي أدخلتها لتسجيل الدخول</p>
                       </div>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>

                       </div>
                   </div>
               </div>
           </div>
     <!--end edit seeker modal-->
     <!--for donor and seeker crate account-->
     <div id="rulesHospital" class="modal fade center" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #ec1c23;">&times;</button>
                    <h4 style="font-weight: bold; color: #555;">الشروط والتعليمات</h4>
                </div>
                <div class="modal-body text-right">
                  <p style="font-weight: bold; color: #777;"> <span  style="color:#ec1c23; font-weight: bold;">-</span>إن بإنشائك للحساب لايكون قد تم تسجيلك في النظام ولكن سيتم التواصل معكم للتأكد من أن الطلب رسمي من قبل المستشفى بإجراءات معينه</p>
                  <p style="font-weight: bold; color: #777;"> <span  style="color:#ec1c23; font-weight: bold;">-</span>في حالة القبول سيتمكن المستفى من الدخول لإدارة بيانات فصائل الدم وإجراء العمليات عليها </p>
                  <p style="font-weight: bold; color: #777;"> <span  style="color:#ec1c23; font-weight: bold;">-</span>بالإظافة إلى الإطلاع على  معلومات عن الفصائل المتوفرة في بقية المستشفيات المسجلة في النظام</p>
                  <h5>ملاحظة</h5>
                  <p style="font-weight: bold; color: #777;"><span  style="color:#ec1c23; font-weight: bold;">-</span>إن هذا الموقع يعتبر همزة وصل بين الباحثين عن متبرعين للدم والمتبرعين أنفسهم وكذالك بين المستشفيات وبموافقتك فإن الموقع غير مسؤول عن أي بيانات خاطئه أو مغلوطه</p>
                  <p style="font-weight: bold; color: #777;"> <span  style="color:#ec1c23; font-weight: bold;">-</span>إستخدم البريد الإلكتروني وكلمة المرور التي أدخلتها لتسجيل الدخول</p>
               </div>
               <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
               </div>
           </div>
       </div>
   </div>
<!--end edit seeker modal-->
          <!--end messages modals for all-->

    <!--Start contact us-->
<div class="contact-us text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-right">
              <p>للإتصال أو الإستفسار</p>
            </div>
            <div class="col-md-4 text-center text-md-left">
              <a href="">تواصل معنا</a>
            </div>
        </div>
    </div>
</div>
<!--End Contact us-->

<!--Start footer-->
<div class="footer text-right ">
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-lg-4">
                <div class="site-info ">
                        <span>Blood</span>
                        <span class="text-bank">Bank</span>
                         <p calss="text-ar">
                            <img src="images/pulse_50px.png"  width="35px" height="30px" alt="Image" >
                            <span style="color: #08526d;">  بنك </span> <span style="color: #ec1c23;">الدم </span>
                             <img src="images/drop_of_blood_30px.png"  width="25px" height="20px" alt="Image" >
                         </p>
                         <p>إن الفكره من هذا البنك هو مساعدة الأخرين للوصول إلى المتبرعين بسهوله كما أنه يمكن المستشفيات والأخرين للتواصل مع المتبرعين أثناء الحاجة</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="helpfull-links ">
                    <h4>روابط الوصول </h4>
                    <div class="row">
                      <div class="col">
                          <ul class="list-unstyled ">
                            <li><a  href="">عن بنك الدم</a></li>
                            <li><a  href="">فوائد التبرع </a></li>
                            <li><a  href="">شروط التبرع</a></li>
                            <li><a  href="">أسأله شائعه</a></li>
                          </ul>
                      </div>
                      <div class="col">
                        <ul class="list-unstyled">
                            <li><a href="">فصائل الدم</a></li>
                          <li><a href="">أعلى</a></li>
                          <li><a href="">من نحن</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="contact ">
                    <h4>تواصل بنا</h4>
                    <ul class="list-unstyled">
                      <li>شارع التحرير -جوار سوق المجاهد,تعز-اليمن</li>
                      <li>التلفون:<i class=" fa fa-phone"></i>737719683</li>
                      <li>الإيميل:<i class=" fa fa-envelope-o"></i><a href="mailto:info@bloodbank.com?subject=Contact">info@bloodbank.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End footer-->

<!--Start copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6  text-center text-sm-right">
             بنك الدم 2021 &copy; جميع الحقوق محفوضه
            </div>
            <div class="col-sm-6  text-center text-sm-left">
                <ul class="list-unstyled">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                    <li><a href=""><i class="fa fa-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End copyrightt-->



       <!--end form registration-->

       <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
       <!--<script src="js/popper.min.js"></script>-->
       <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
       <script src="{{URL::asset('js/donor-seeker-profile-login-nav.js')}}"></script>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

       <!--Start  ajax Code for all -->
       <script type="text/javascript">
           //Start header ajax
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
           //End header ajax

           //Start ajax Code for donors
           $(document).ready(function() {
               $("#bt_addDonor").click(function (e) {

                   e.preventDefault();
                   var donorsForm = new FormData($('#account_donor_form')[0]);
                   $.ajax({
                       type: 'post',
                       url: "{{url('new/addDonor')}}",
                       data:donorsForm,
                       processData: false,
                       contentType: false,
                       success: function (result) {

                       }

                   });
               });
           });
           //End ajax Code for donors

           //Start ajax Code for seeker
           $(document).ready(function() {
               $("#bt_addSeeker").click(function (e) {

                   e.preventDefault();
                   var seekersForm = new FormData($('#account_seeker_form')[0]);
                   $.ajax({
                       type: 'post',
                       url: "{{url('new/addSeeker')}}",
                       data:seekersForm,
                       processData: false,
                       contentType: false,
                       success: function (result) {

                       }

                   });
               });
           });
           //End ajax Code for seeker

       </script>
       <!--End ajax Code for all-->

 </body>
</html>
