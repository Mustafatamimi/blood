<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard Admin</title>

        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css ')}} ">
        <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/donor-seeker-hospital-custom.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/upper-bar.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/dashboard-custom-allmanagdata.css')}}">
      <style>
          .addScroll{
              overflow-y: auto;
              height: 430px;
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

        <!--Start All user profile -->
        <div class="user-profile">
            <div class="text-right">

                 <!-- start user-profile-header-->
                <div class="profile-header">
                    <div class="profile-image">
                        <img src="images/image-slider2.jpg" alt="image...">
                    </div>
                    <div class="profile-nav-info">
                        <h4>سامي أحمد</h4>
                        <div class="address">
                           <span class="state">صنعاء</span>
                           <span>-</span>
                           <span class="city">حي الستين</span>
                        </div>
                    </div>
                    <div class="profile-option" onclick="mydisplay_hidden()">
                        <span class="alert-message1">
                            <i class="fa fa-sort-desc"></i>
                        </span>
                   </div>
                   <div class="alert" id="mydiv">
                        <ul>
                            <li><i  class="fa fa-sign-out"></i>تسجيل خروج</li>
                            <li><i class="fa fa-trash"></i> حذف حسابي </li>
                        </ul>
                   </div>
               </div>

                <!-- end user-profile-header-->

                <!-- start content user-profile-->
                <div class="main-bd">
                     <!--start right user profile-->
                    <div class="right-side">
                        <div class="profile_side">
                                <p class="mobile-no">
                                    <i class="fa fa-phone"></i>
                                    <span>737719683</spanp>
                                </p>
                                <p class="user-mail">
                                    <i class="fa fa-envelope"></i>
                                    <span>blood-bank@gmail.com</span>
                                    <hr>
                                </p>
                                <div class="user-bio">
                                    <h3>لماذا أنا هنا</h3>
                                    <p class="pio">
                                        مرحبا بك في بنك الدم ,عطاءك سو ف يساهم
                                        في الكثير من المنفعة التي بإذن الله سوف تحفظ الحياه
                                        للكثير من الأشخاص الذين قد يصعب عليهم العثور على المتبرعين

                                    </p>
                                </div>
                                <hr>
                                <div class="profile-btn  text-center">
                                    <div class="addressLogin">
                                        <a href="website.html"> <i class="fa fa-home"></i> الرئيسيه</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                    </div>
                    <!--end right user profile-->

                    <!--start left side content user profile-->
                    <div class="left-side">
                        <div class="nav_content">
                            <ul>
                                <li  onclick="tabs(0)" class="profile-donor-edit active" id="0">
                                     تعديل البيانات
                                </li>
                                <li  onclick="tabs(1)" class="profile-donorsShowData" id="1">
                                    المتبرعين
                                    <div class="profile-option2">
                                        <div class="notifcation2">
                                            <i class="fa fa-bell"></i>
                                            <span class="alert-message2">2</span>
                                        </div>
                                    </div>
                                </li>
                                <li  onclick="tabs(2)" class="profile-seekersShowData" id="2">
                                    باحثين عن دم
                                    <div class="profile-option2">
                                        <div class="notifcation2">
                                            <i class="fa fa-bell"></i>
                                            <span class="alert-message2">2</span>
                                        </div>
                                    </div>
                                </li>
                                <li  onclick="tabs(3)" class="profile-hospitalsShowData" id="3">
                                    المستشفيات
                                    <div class="profile-option2">
                                        <div class="notifcation2">
                                            <i class="fa fa-bell"></i>
                                            <span class="alert-message2">2</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-nav-body">
                           <!--start donor manage Data in profile -->
                            <div class="profile-donor tab container">
                                <div class="card">
                                    <div class="card-header">
                                       <!--start title-->
                                        <div class="table-title">
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                      <h4> <b>تعديل </b> بياناتك الشخصية</h4>
                                                    </div>
                                                    <div class="col-sm-6 oper">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!--end  title-->
                                    </div>
                                    <div class="card-body">
                                               <!--start donor profile data table operation 1-->
                                                <div class="table-responsive showForLargScreen">
                                                    <table id="donor_profile_table" class="table table-hover table-bordered">
                                                        <thead >
                                                            <tr class="text-center">
                                                                <th>الرقم</th>
                                                                <th>إسم المستخدم</th>
                                                                <th>كلمة المرور</th>
                                                                <th>الإسم</th>
                                                                <th>الهاتف</th>
                                                                <th>العمر</th>
                                                                <th>الفصيله</th>
                                                                <th>أخر تاريخ للتبرع</th>
                                                                <th>أهلية التبرع</th>
                                                                <th>الايام المتبقيه</th>
                                                                <th>الجنس</th>
                                                                <th>المحافظة</th>
                                                                <th>الحي</th>
                                                                <th>عرض بياناتي</th>
                                                                <th>البريد</th>
                                                                <th>الصوره</th>
                                                                <th>تعديل</th>
                                                                <th>عرض</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="myDonorSearchTable">
                                                            <tr>
                                                                <td>1</td>
                                                                <td>12sami21</td>
                                                                <td>shh9882782sh</td>
                                                                <td>سامي</td>
                                                                <td>737719683</td>
                                                                <td>24</td>
                                                                <td>A+</td>
                                                                <td>23/3/2021</td>
                                                                <td>مؤهل</td>
                                                                <td>41</td>
                                                                <td>ذكر</td>
                                                                <td>تعز</td>
                                                                <td>حارة عمار</td>
                                                                <td>للمستشفيات</td>
                                                                <td>eng.samialsharabi@gmail.com</td>
                                                                <td><img src="images/image-slider2.jpg" width="40px" height="40px"  alt="image..." style="border-radius:50%; border:1
                                                                px solid #fff;
                                                                    box-shadow: 0px 2px 4px rgba(0,0,0,.2);"></td>
                                                                <td><button  type="button" id="edit-bt-donor-profile" data-toggle="modal" data-target="#editProfileDonorModal" class="btn" style="border-radius: 35%;"><i class="fa fa-pencil" style="color: green; font-size:20px;"></i></button></td>
                                                                <td><button  type="button" id="show-bt-donor-profile" data-toggle="modal" data-target="#showProfileDonorModal" class="btn" style="border-radius: 35%;"><i class="fa fa-eye" style="color: blue; font-size:20px;"></i></button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                        <!--end table-->
                                        <!--start show data for small screen-->
                                                <div class="showForSmallScreen">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 style="color: rgb(22, 22, 99);"> بيانات المتبرع بالدم <i class="fa fa-odnoklassniki" aria-hidden="true"></i></h4>
                                                        </div>
                                                        <div class="modal-body addScroll2 text-right">
                                                            <div class="text-center navbar-brand2">
                                                                <span>Blood</span>
                                                                <span class="text-bank">Bank</span>
                                                                <p calss="text-ar">
                                                                    <img src="images/pulse_50px.png"  width="35px" height="30px" alt="Image" >
                                                                    <span style="color: #08526d;">  بنك </span> <span style="color: #ec1c23;">الدم </span>
                                                                    <img src="images/drop_of_blood_30px.png"  width="25px" height="20px" alt="Image" >
                                                                </p>
                                                            </div>
                                                            <hr>
                                                                <img src="images/image-slider2.jpg" width="50px" height="50px"  alt="image..." style="border-radius:50%; border:1
                                                                    px solid #fff;
                                                                        box-shadow: 0px 2px 4px rgba(0,0,0,.2); float:left;">
                                                            <h5>الرقم: <span>2</span></h5>
                                                            <h5>إسم المستخدم: <span> 12sami24</span></h5>
                                                            <h5>الإسم الكامل: <span>سامي أحمد خالد</span></h5>
                                                            <h5>رقم الهاتف : <span> 737719683</span></h5>
                                                            <h5>كلمة المرور: <span> 125soksk8hjsh</span></h5>
                                                            <h5>فصيلة الدم: <span> A+</span></h5>
                                                            <h5>العمر: <span> 25</span></h5>
                                                            <h5>الجنس: <span> ذكر</span></h5>
                                                            <h5>المحافظة:  <span> تعز</span></h5>
                                                            <h5>السكن: <span> مديرية القهره -جامع السعيد</span></h5>
                                                            <h5>البريد الإلكتروني: <span> enialsharabi@comg.sam</span></h5>
                                                            <h5>  عرض البيانات: <span>للجميع</span></h5>
                                                            <h5> تاريخ أخر تبرع: <span> 20-20-2020</span></h5>
                                                            <h5> أهلية التبرع: <span> مؤهل</span></h5>
                                                            <h5> عدد الأيام المتبقيه <span> 41</span></h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="inputBx">
                                                                <button  type="button" id="edit-bt-donor-profile" data-toggle="modal" data-target="#editProfileDonorModal" class="btn" style="border-radius: 35%;"><i class="fa fa-pencil" style="color: green; font-size:20px;"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                             </div>
                                         <!--end show data for small screen-->
                                    </div>
                                </div>
                            </div>
                              <!--start modal to [edit donor]-->
                            <div id="editProfileDonorModal" class="modal fade">
                                <div class="modal-dialog">
                                    <form method="POST" id="edit-donor-form" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4>تعديل البيانات <i class="fa fa-pencil" style="color: green; font-size:20px;"></i></h4>
                                            </div>
                                            <div class="modal-body addScroll">
                                                <div class="inputBx form-group">
                                                    <label for="donorNameEdit">إسم المستخدم:</label>
                                                    <input type="text" class="form-control"  id="donorNameEdit"  name="donorNameEdit" required >
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label for="infDonorNameEdit">الإسم:</label>
                                                    <input type="text" class="form-control"  id="infDonorNameEdit"   name="infDonorNameEdit" required >
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label for="donorPhoneEdit">رقم الهاتف:</label>
                                                    <input type="number" class="form-control" id="donorPhoneEdit"  name="donorPhoneEdit" required >
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                        <label for="donorPwdEdit">كلمة المرور:</label>
                                                        <input type="password" class="form-control" id="donorPwdEdit"  name="donorPwdEdit" required >
                                                        <div class="valid-feedback"></div>
                                                        <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                        <label for="cDonorPwdEdit">تأكيد كلمة المرور:</label>
                                                        <input type="password" class="form-control" id="cDonorPwdEdit" name="cDonorPwdEdit" required >
                                                        <div class="valid-feedback"></div>
                                                        <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label for="donorBloodgEdit">فصيلة الدم:</label>
                                                    <select class="form-control" id="donorBloodgEdit">
                                                        <option value="a+">A+</option>
                                                        <option value="a-">A-</option>
                                                        <option value="o+">O+</option>
                                                        <option value="o-">O-</option>
                                                        <option value="b+">B+</option>
                                                        <option value="b-">B-</option>
                                                        <option value="ab+">AB+</option>
                                                        <option value="ab-">AB-</option>
                                                    </select>
                                                    </div>
                                                <div class="inputBx form-group">
                                                        <label for="donorDateEdit">تاريخ الميلاد:</label>
                                                        <input type="date" class="form-control" id="donorDateEdit"  name="donorDateEdit" required >
                                                        <div class="valid-feedback"></div>
                                                        <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                        <label>الجنس:</label>
                                                        <br>
                                                        <div  class="form-control" style="display: flex;align-items: center;justify-content: center;">
                                                            <input  type ="radio" name = "donorSexdRadioEdit"  value = "male" checked>
                                                            <span class="lradio">ذكر</span>
                                                            <input type = "radio" name = "donorSexdRadioEdit" value = "female">
                                                            <span class="lradio" >أنثى </span>
                                                        </div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label> المحافظةالمتواجد فيها حاليا:</label>
                                                    <select class="form-control" id="donorCityEdit">
                                                        <option value="taiz">تعز</option>
                                                        <option value="sanaa">صنعاء</option>
                                                        <option value="edn">عدن</option>
                                                        <option value="centersanaa">أمانة العاصمة</option>
                                                        <option value="shabwa">شبوه</option>
                                                        <option value="hathramoot">حضرموت</option>
                                                        <option value="eb">إب</option>
                                                        <option value="thaleh">الضالع</option>
                                                        <option value="lahg">لحج</option>
                                                        <option value="soqtra">أرخبيل سقطرى</option>
                                                        <option value="mahra">المهره</option>
                                                        <option value="sada">صعده</option>
                                                        <option value="rima">ريمه</option>
                                                        <option value="mareb">مأرب</option>
                                                        <option value="haga">حجه</option>
                                                        <option value="thamar">ذمار</option>
                                                        <option value="abian">أبين</option>
                                                        <option value="mahwait">المحويت</option>
                                                        <option value="jawf">الجوف</option>
                                                        <option value="hodida">الحديده</option>
                                                        <option value="bitha">البيضاء</option>
                                                        <option value="emran">عمران</option>
                                                    </select>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label for="donorNeighborEdit">المكان الذي تتواجد فيه حاليا:</label>
                                                    <input type="text" class="form-control" id="donorNeighborEdit" name="donorNeighborEdit" required >
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label for="donorEmailEdit">البريد الإلكتروني:</label>
                                                    <input type="email" class="form-control" id="donorEmailEdit"  name="donorEmailEdit" required >
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label>هل تود السماح لإظهار بياناتك لل:</label>
                                                    <br>
                                                    <div class="form-control"  style="display: flex;align-items: center;justify-content: center;">
                                                    <input  type ="radio" name = "donorIsShowEdit"  value = "all" checked>
                                                    <span class="lradio">للجميع</span>
                                                    <input type = "radio" name = "donorIsShowEdit" value = "hospital">
                                                    <span class="lradio" >للمستشفيات</span>
                                                    </div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label for="donorLastDateEdit">هل قمت بالتبرع من قبل؟أدخل تاريخ أخر تبرع:</label>
                                                    <input type="date" class="form-control" id="donorLastDateEdit"  name="donorLastDateEdit" required >
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback">من فضلك أملئ هذا الحقل.</div>
                                                </div>
                                                <div class="inputBx form-group">
                                                    <label for="donorPicEdit">إختر صورة -خياري:</label>
                                                    <input type="file" id="donorPicEdit" name="donorPicEdit" >
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="inputBx">
                                                    <input type="submit" value="تعديل" name="donorEditProfile" class=" btn btn-success">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <!--end edit modal-->
                        <!--start show donor modal-->
                        <div id="showProfileDonorModal" class="modal fade">
                            <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 style="color: rgb(22, 22, 99);"> بيانات المتبرع بالدم <i class="fa fa-eye" style="color: blue; font-size:20px;"></i></button></h4>
                                        </div>
                                        <div class="modal-body addScroll text-right">
                                            <div class="text-center navbar-brand2">
                                                <span>Blood</span>
                                                <span class="text-bank">Bank</span>
                                                <p calss="text-ar">
                                                    <img src="images/pulse_50px.png"  width="35px" height="30px" alt="Image" >
                                                    <span style="color: #08526d;">  بنك </span> <span style="color: #ec1c23;">الدم </span>
                                                    <img src="images/drop_of_blood_30px.png"  width="25px" height="20px" alt="Image" >
                                                </p>
                                            </div>
                                            <hr>
                                                <img src="images/image-slider2.jpg" width="50px" height="50px"  alt="image..." style="border-radius:50%; border:1
                                                    px solid #fff;
                                                        box-shadow: 0px 2px 4px rgba(0,0,0,.2); float:left;">
                                            <h5>الرقم: <span>2</span></h5>
                                            <h5>إسم المستخدم: <span> 12sami24</span></h5>
                                            <h5>الإسم الكامل: <span>سامي أحمد خالد</span></h5>
                                            <h5>رقم الهاتف : <span> 737719683</span></h5>
                                            <h5>كلمة المرور : <span> 125soksk8hjsh</span></h5>
                                            <h5>فصيلة الدم : <span> A+</span></h5>
                                            <h5>العمر: <span> 25</span></h5>
                                            <h5>الجنس: <span> ذكر</span></h5>
                                            <h5>المحافظة:  <span> تعز</span></h5>
                                            <h5>السكن: <span> مديرية القهره -جامع السعيد</span></h5>
                                            <h5>البريد الإلكتروني: <span> enialsharabi@comg.sam</span></h5>
                                            <h5>  عرض البيانات: <span>للجميع</span></h5>
                                            <h5> تاريخ أخر تبرع: <span> 20-20-2020</span></h5>
                                            <h5> أهلية التبرع: <span> مؤهل</span></h5>
                                            <h5> عدد الأيام المتبقيه: <span> 41</span></h5>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="inputBx">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!--start show seeker modal-->
                     <!--end donor profile data table and modals operation 1-->

                            <!--start show donors operation 2-->
                            <div class="profile-donor-showData tab">
                                <div class="card">
                                    <div class="card-header">
                                       <!--start title-->
                                        <div class="table-title">
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                      <h4> قائمة <b>المتبرعين </b></h4>
                                                    </div>
                                                    <div class="col-sm-6 oper">
                                                       <h4 style="color: rgb(207, 189, 189); font-weight: bold;">150 <span style="color: #555; font-weight: bold;">متبرع</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!--end  title-->
                                    </div>
                                    <div class="card-body">
                                        <div class="search-wrapper col-sm-3 text-center">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                            <input type="search" id="myFindDonorSearchInput" placeholder=" إبحث هنا">
                                          </div>
                                              <!--start cards-->
                                         <div class="cards addScroll" id="div-cards">
                                             <div class="card-single1" id="cardBodySearchFindDonor">
                                                 <div class="card text-center">
                                                     <i class="fa fa-odnoklassniki" style="font-size: 50px; color: #08526d; margin-top:3px;"></i>
                                                     <div class="card-body">
                                                       <h5 class="card-title">محمد منير - تعز - سوق الصميل</h5>
                                                       <div class="card-text">
                                                         <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                         <p >تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                         <p>أهلية التبرع حسب تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">مؤهل</span></p>
                                                       </div>
                                                       <h6 class="btn btn-primary">737735673</h6>
                                                     </div>
                                                   </div>
                                             </div>

                                             <div class="card-single1"  id="cardBodySearchFindDonor">
                                                 <div class="card text-center">
                                                     <i class="fa fa-odnoklassniki" style="font-size: 50px; color: #08526d; margin-top:3px;"></i>
                                                     <div class="card-body">
                                                       <h5 class="card-title">محمد منير - تعز - سوق الصميل</h5>
                                                       <div class="card-text">
                                                         <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                         <p >تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                         <p>أهلية التبرع حسب تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">مؤهل</span></p>
                                                       </div>
                                                       <h6 class="btn btn-primary">737735673</h6>
                                                     </div>
                                                   </div>
                                             </div>

                                         <div class="card-single1"  id="cardBodySearchFindDonor">
                                             <div class="card text-center">
                                                 <i class="fa fa-odnoklassniki" style="font-size: 50px; color: #08526d; margin-top:3px;"></i>
                                                 <div class="card-body">
                                                   <h5 class="card-title">محمد منير - تعز - سوق الصميل</h5>
                                                   <div class="card-text">
                                                     <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                     <p >تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                     <p>أهلية التبرع حسب تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">مؤهل</span></p>
                                                   </div>
                                                   <h6 class="btn btn-primary">737735673</h6>
                                                 </div>
                                               </div>
                                         </div>

                                         <div class="card-single1" id="cardBodySearchFindDonor">
                                             <div class="card text-center">
                                                 <i class="fa fa-odnoklassniki" style="font-size: 50px; color: #08526d; margin-top:3px;"></i>
                                                 <div class="card-body">
                                                   <h5 class="card-title">محمد منير - تعز - سوق الصميل</h5>
                                                   <div class="card-text">
                                                     <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                     <p >تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                     <p>أهلية التبرع حسب تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">مؤهل</span></p>
                                                   </div>
                                                   <h6 class="btn btn-primary">737735673</h6>
                                                 </div>
                                               </div>
                                         </div>
                                         <div class="card-single1"  id="cardBodySearchFindDonor">
                                             <div class="card text-center">
                                                 <i class="fa fa-odnoklassniki" style="font-size: 50px; color: #08526d; margin-top:3px;"></i>
                                                 <div class="card-body">
                                                   <h5 class="card-title">محمد منير - تعز - سوق الصميل</h5>
                                                   <div class="card-text">
                                                     <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                     <p >تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                     <p>أهلية التبرع حسب تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">مؤهل</span></p>
                                                   </div>
                                                   <h6 class="btn btn-primary">737735673</h6>
                                                 </div>
                                               </div>
                                         </div>
                                         <div class="card-single1"  id="cardBodySearchFindDonor">
                                             <div class="card text-center">
                                                 <i class="fa fa-odnoklassniki" style="font-size: 50px; color: #08526d; margin-top:3px;"></i>
                                                 <div class="card-body">
                                                   <h5 class="card-title">محمد منير - تعز - سوق الصميل</h5>
                                                   <div class="card-text">
                                                     <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                     <p >تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                     <p>أهلية التبرع حسب تاريخ أخر تبرع <span style="color: #08526d; font-weight: bold;">مؤهل</span></p>
                                                   </div>
                                                   <h6 class="btn btn-primary">737735673</h6>
                                                 </div>
                                               </div>
                                         </div>
                                     </div>
                                     <!--end  cards -->
                                    </div>
                                </div>
                            </div>
                            <!--end show donors data operation2-->

                            <!--start  show seekers data operation3-->
                            <div class="profile-seeker-showData tab">
                                <div class="card">
                                    <div class="card-header">
                                       <!--start title-->
                                        <div class="table-title">
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                      <h4> قائمة <b>الباحثين عن دم </b></h4>
                                                    </div>
                                                    <div class="col-sm-6 oper">
                                                       <h4 style="color:rgb(207, 189, 189); font-weight: bold ;">150 <span style="color: #555; font-weight: bold;">باحث عن دم</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!--end  title-->
                                    </div>
                                    <div class="card-body">
                                        <div class="search-wrapper col-sm-3 text-center">
                                           <i class="fa fa-search" aria-hidden="true"></i>
                                           <input type="search" id="myFindSeekerSearchInput" placeholder=" إبحث هنا">
                                         </div>
                                             <!--start cards-->
                                         <div class="cards addScroll" id="div-cards">
                                            <div class="card-single1" id="cardBodySearchFindSeeker">
                                                <div class="card text-center">
                                                    <i class="fa fa-user" style="font-size: 50px; color: #08526d; margin-top: 2px;"></i>
                                                    <div class="card-body">
                                                      <h5 class="card-title">عبدالعزيز - تعز - الثوره</h5>
                                                      <div class="card-text">
                                                        <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                        <p>تاريخ الحاجة للدم<span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                        <p>الملاحظات</p>
                                                      </div>
                                                      <h6 class="btn btn-primary">737735673</h6>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card-single1" id="cardBodySearchFindSeeker">
                                                <div class="card text-center">
                                                    <i class="fa fa-user" style="font-size: 50px; color: #08526d; margin-top: 2px;"></i>
                                                    <div class="card-body">
                                                      <h5 class="card-title">عبدالعزيز - تعز - الثوره</h5>
                                                      <div class="card-text">
                                                        <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                        <p>تاريخ الحاجة للدم<span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                        <p>الملاحظات</p>
                                                      </div>
                                                      <h6 class="btn btn-primary">737735673</h6>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card-single1" id="cardBodySearchFindSeeker">
                                                <div class="card text-center">
                                                    <i class="fa fa-user" style="font-size: 50px; color: #08526d; margin-top: 2px;"></i>
                                                    <div class="card-body">
                                                      <h5 class="card-title">عبدالعزيز - تعز - الثوره</h5>
                                                      <div class="card-text">
                                                        <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                        <p>تاريخ الحاجة للدم<span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                        <p>الملاحظات</p>
                                                      </div>
                                                      <h6 class="btn btn-primary">737735673</h6>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card-single1" id="cardBodySearchFindSeeker">
                                                <div class="card text-center">
                                                    <i class="fa fa-user" style="font-size: 50px; color: #08526d; margin-top: 2px;"></i>
                                                 <div class="card-body">
                                                      <h5 class="card-title">عبدالعزيز - تعز - الثوره</h5>
                                                      <div class="card-text">
                                                        <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                        <p>تاريخ الحاجة للدم<span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                        <p>الملاحظات</p>
                                                      </div>
                                                      <h6 class="btn btn-primary">737735673</h6>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="card-single1" id="cardBodySearchFindSeeker">
                                           <div class="card text-center">
                                                <i class="fa fa-user" style="font-size: 50px; color: #08526d; margin-top: 2px;"></i>
                                             <div class="card-body">
                                                  <h5 class="card-title">عبدالعزيز - تعز - الثوره</h5>
                                                  <div class="card-text">
                                                    <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                    <p>تاريخ الحاجة للدم<span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                    <p>الملاحظات</p>
                                                  </div>
                                                  <h6 class="btn btn-primary">737735673</h6>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card-single1" id="cardBodySearchFindSeeker">
                                         <div class="card text-center">
                                                <i class="fa fa-user" style="font-size: 50px; color: #08526d; margin-top: 2px;"></i>
                                              <div class="card-body">
                                                <h5 class="card-title">عبدالعزيز - تعز - الثوره</h5>
                                                <div class="card-text">
                                                    <h4 style="color:crimson;"> <span>(</span>A+<span>)</span></h4>
                                                    <p>تاريخ الحاجة للدم<span style="color: #08526d; font-weight: bold;">23-7-2021</span></p>
                                                    <p>الملاحظات</p>
                                                </div>
                                                <h6 class="btn btn-primary">737735673</h6>
                                             </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--end  cards -->
                                   </div>
                                </div>
                            </div>
                           <!--end  show seekers data operation3-->
                           <!--start  show hospitals data operation4-->
                           <div class="profile-seeker-showData tab">
                            <div class="card">
                                <div class="card-header">
                                   <!--start title-->
                                    <div class="table-title">
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                  <h4> قائمة <b>المستشفيات التي تسمح بعرض بياناتها</b></h4>
                                                </div>
                                                <div class="col-sm-6 oper">
                                                   <h4 style="color:rgb(207, 189, 189); font-weight: bold ;">150 <span style="color: #555; font-weight: bold;">مستشفى</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!--end  title-->
                                </div>
                                <div class="card-body">
                                    <div class="search-wrapper col-sm-3 text-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <input type="search" id="myFindHospitalSearchInput" placeholder="إبحث هنا">
                                    </div>
                                             <!--start cards-->
                                        <div class="cards addScroll" id="div-cards">
                                            <div class="card-single1" id="cardBodySearchFindHospital">
                                                <div class="card showCard">
                                                    <img class="card-img-top" src="images/image-slider2.jpg" alt="صورة المستفى">
                                                    <div class="card-body">
                                                      <h5 class="card-title">مستشفى الثورة - تعز - حي الشماسي</h5>
                                                      <a href="#" class="btn btn-primary">مشاهدة بنك الدم</a>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card-single1"  id="cardBodySearchFindHospital">
                                                <div class="card showCard" >
                                                    <img class="card-img-top" src="images/image-slider2.jpg" alt="صورة المستفى">
                                                    <div class="card-body">
                                                      <h5 class="card-title">مستشفى العسكري - تعز - حي العسكري</h5>
                                                      <a href="#" class="btn btn-primary">مشاهدة بنك الدم</a>
                                                    </div>
                                                  </div>
                                            </div>

                                        <div class="card-single1"  id="cardBodySearchFindHospital">
                                            <div class="card showCard">
                                                <img class="card-img-top" src="images/image-slider2.jpg" alt="صورة المستفى">
                                                <div class="card-body">
                                                  <h5 class="card-title">مستشفى الثورة - صنعاء - شارع الستين</h5>
                                                  <a href="#" class="btn btn-primary">مشاهدة بنك الدم</a>
                                                </div>
                                              </div>
                                        </div>

                                        <div class="card-single1" id="cardBodySearchFindHospital">
                                            <div class="card showCard" >
                                                <img class="card-img-top" src="images/image-slider2.jpg" alt="صورة المستفى">
                                                <div class="card-body">
                                                  <h5 class="card-title">مستشفى البريهي - تعز - بيرباشا</h5>
                                                  <a href="#" class="btn btn-primary">مشاهدة بنك الدم</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="card-single1"  id="cardBodySearchFindHospital">
                                            <div class="card showCard" >
                                                <img class="card-img-top" src="images/image-slider2.jpg" alt="صورة المستفى">
                                                <div class="card-body">
                                                  <h5 class="card-title">مستشفى العباس - تعز - التحرير الأسفل</h5>
                                                  <a href="#" class="btn btn-primary">مشاهدة بنك الدم</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-single1"  id="cardBodySearchFindHospital">
                                            <div class="card showCard" >
                                                <img class="card-img-top" src="images/image-slider2.jpg" alt="صورة المستفى">
                                                <div class="card-body">
                                                  <h5 class="card-title">مستشفى التعاون - تعز - حي المسبح</h5>
                                                  <a href="#" class="btn btn-primary">مشاهدة بنك الدم</a>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <!--end  cards -->
                               </div>
                               </div>
                            </div>
                        </div>
                           <!--start  show hospitals data operation3-->

                        </div>
                    </div>
                   <!--end left side content user profile-->
                </div>
                <!-- end all content user-profile left and right-->
            </div>

         <!--Start All user profile -->
        <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
        <!--<script src="js/popper.min.js"></script>-->
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/donor-seeker-profile-login-nav.js')}}"></script>

        <script>
            /*for display (toggle) the logout&remove account at header*/
         function mydisplay_hidden() {
         var mydiv1 = document.getElementById("mydiv");

         if (mydiv1.style.display === "none") {
          mydiv1.style.display = "inline";
         } else {
           mydiv1.style.display = "none";
         }
        }
        </script>
        <script>
             $("#myFindHospitalSearchInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#div-cards #cardBodySearchFindHospital").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
             });
            $("#myFindDonorSearchInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#div-cards #cardBodySearchFindDonor").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
            });
            $("#myFindSeekerSearchInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#div-cards #cardBodySearchFindSeeker").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
            });
        </script>

    </body>
</html>
