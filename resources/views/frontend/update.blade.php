@extends('frontend.layout.main')
<<<<<<< HEAD
@section('main-container') 
<div class="offcanvas__search mb-25">
  <form action="#">
     <input type="text" placeholder="What are you searching for?">
      <button type="submit"><i class="far fa-search"></i></button>
  </form>   
</div>
<div class="mobile-menu fix mb-40"></div>
<div class="offcanvas__contact mt-30 mb-20">
   <h4>Contact Info</h4>
   <ul>
    <li class="d-flex align-items-center">
      <div class="offcanvas__contact-icon mr-15">
        <i class="fal fa-map-marker-alt"></i>
      </div>
      <div class="offcanvas__contact-text">
        <a target="_blank"href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
         Mirnada City Tower, NYC</a>
       </div>
    </li>
    <li class="d-flex align-items-center">
      <div class="offcanvas__contact-icon mr-15">
          <i class="far fa-phone"></i>
      </div>
      <div class="offcanvas__contact-text">
         <a href="tel:+088889797697">+088889797697</a>
       </div>
         </li>
      <li class="d-flex align-items-center">
         <div class="offcanvas__contact-icon mr-15">
         <i class="fal fa-envelope"></i>
       </div>
    <div class="offcanvas__contact-text">
      <a href="tel:+012-345-6789"><span class="mailto:support@mail.com">support@mail.com</span></a>
   </div>
 </li>
 </ul>
</div>
<div class="offcanvas__social">
  <ul>
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
    </ul>
</div>
</div>
</div> 
</div>
      
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
      <!-- Offcanvas area start -->

      <!--Speaker popup area start -->
<section class="speaker__popup-area">
   <div class="popup__wrapper">
      <div class="popup__title-wrapper">
         <h3 class="popup__title">Add Event Speaker</h3>
         </div>
    <div class="popup__input-wrapper">
      <form action="#">
       <div class="singel__input-field mb-15">
        <label class="input__field-text">Speaker Name</label>
          <input type="text">
        </div>
    <div class="singel__input-field mb-15">
      <label class="input__field-text">Email</label>
       <input type="text">
    </div>
    <div class="singel__input-field mb-15">
      <label class="input__field-text">Phone Number</label>
       <input type="text">
    </div>
    <div class="singel__input-field mb-15">
      <label class="input__field-text">Organization Name</label>
      <input type="text">
    </div>
    <div class="singel__input-field mb-15">
        <label class="input__field-text">Designation</label>
      <input type="text">
   </div>
    <div class="popup__update mb-15">
      <label class="input__field-text">Upload Image ( 200x200px )</label>
       <input type="file">
   </div>
    <button class="input__btn w-100" type="submit"><i class="fa-regular fa-plus"></i>Add Speaker</button>
      </form>
      </div>
      </div>
      </section>
      <!--Speaker popup area end -->

      <!-- Event popup area start -->
    <section class="event__popup-area">
     <div class="popup__wrapper">
        <div class="popup__title-wrapper">
          <h3 class="popup__title">Add Event Attendant</h3>
       </div>
      <div class="popup__input-wrapper">
        <form action="#">
          <div class="singel__input-field mb-15">
              <label class="input__field-text">Name</label>
                <input type="text">
            </div>
            <div class="singel__input-field mb-15">
                <label class="input__field-text">Email</label>
                <input type="email">
            </div>
            <div class="singel__input-field mb-15">
                <label class="input__field-text">Phone Number</label>
                <input type="text">
            </div>
            <div class="singel__input-field mb-15">
                <label class="input__field-text">Organization Name</label>
                <input type="text">
            </div>
            <div class="singel__input-field mb-15">
                <label class="input__field-text">Ticket ID No</label>
                <input type="text">
            </div>
            <div class="popup__update">
                <label class="input__field-text">Upload Image ( 200x200px )</label>
                <input type="file" name="img" accept="image/*">
             </div>
            <button class="input__btn w-100" type="submit"><i class="fa-regular fa-plus"></i>Add
             Attendant</button>
               </form>
            </div>
         </div>
      </section>
      <!-- Event popup area end -->
      
      <!-- Dashboard area start -->
      <div class="page__full-wrapper">
      <!-- App sidebar area start -->
      <div class="expovent__sidebar" data-background="{{url('assets/img/bg/dropdown-bg.png')}}">
         <div class="logo-details">
            <span>
               <a href="dashboard.html">
                  <img class="logo__white" src="{{url('assets/img/logo/logo-small.svg')}}" alt="logo not found">
               </a>
            </span>
            <span>
               <a href="dashboard.html">
                  <img class="log__smnall" src="{{url('assets/img/logo/logo.svg')}}" alt="logo not found">
               </a>
            </span>
         </div>
         <div class="sidebar__inner simple-bar">
            <div class="dlabnav">
               <ul class="metismenu" id="menu">
                  <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-home"></i>
                        <span class="nav-text">Dashboard</span>
                     </a>
                     <ul aria-expanded="false">
                        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li><a href="{{url('/landing')}}">Landing Page</a></li>
                        <li><a href="{{url('/element')}}">UI Elements</a></li>
                     </ul>
                  </li>
                  <li><a href="{{url('/schedulelist')}}" aria-expanded="false">
                        <i class="flaticon-calendar-1"></i>
                        <span class="nav-text">Schedule List</span>
                     </a>
                  </li>
                  <li><a href="{{url('/speakerlist')}}" aria-expanded="false">
                        <i class="flaticon-speaker"></i>
                        <span class="nav-text">Speaker List</span>
                     </a>
                  </li>
                  <li><a href="{{url('/attendantlist')}}" aria-expanded="false">
                        <i class="flaticon-user-1"></i>
                        <span class="nav-text">Attendant List</span>
                     </a>
                  </li>
                  <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                     <i class="flaticon-reminder"></i>
                     <span class="nav-text">Upcomg Event</span>
                  </a>
                  <ul aria-expanded="false">
                     <li><a href="{{url('/createevent')}}">Create Event</a></li>
                     <li><a href="{{url('/eventlist')}}"> Event List</a></li>
                     <li><a href="{{url('/eventdetails')}}"> Event Details</a></li>
                  </ul>
                  </li>
                  <li><a href="{{url('/calendar')}}" aria-expanded="false">
                        <i class="flaticon-calendar"></i>
                        <span class="nav-text">Calendar</span>
                     </a>
                  </li>
                  <li><a href="{{url('/venue')}}" aria-expanded="false">
                        <i class="flaticon-map-2"></i>
                        <span class="nav-text">Venue</span>
                     </a>
                  </li>
                  <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                     <i class="flaticon-user-1"></i>
                     <span class="nav-text">Profile</span>
                  </a>
                  <ul aria-expanded="false">
                     <li><a href="{{url('/profile')}}">Profile</a></li>
                     <li><a href="{{url('/setting')}}">Setting</a></li>
                     <li><a href="{{url('/chat')}}">Chatbox</a></li>
                      <li><a href="{{route('login')}}">Sign in</a></li>
                     <li><a href="{{route('register')}}">Sign up</a></li> 
                  </ul>
                  </li>
               </ul>
               <div class="sidebar__thumb mb-60 mt-50">
                  <a href="#">
                     <img src="{{url('assets/img/sidebar/sidebar.jpg')}}" alt="image not found">
                  </a>
               </div>
               <div class="sidebar__profile mb-50">
                  <a href="signin.html"><i class="flaticon-log-out-3"></i><span class="links_name">Log out</span></a>
               </div>
               <div class="sidebar__copyright">
                  <p>Copyright @ Expovent 2023</p>
               </div>
            </div>
         </div>
      </div>
      <div class="app__offcanvas-overlay"></div>
      <!-- App sidebar area end -->
      <div class="page__body-wrapper">
      <!-- App header area start -->
      <div class="app__header__area">
         <div class="app__header-inner">
            <div class="app__header-left">
               <a id="sidebar__active" class="app__header-toggle" href="javascript:void(0)">
                  <div class="bar-icon-2">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </a>
              <div class="app__herader-input p-relative">
                  <input type="search" placeholder="Search Here . . .">
                  <button><i class="flaticon-loupe"></i></button>
               </div>
            </div>
      <div class="app__header-right">
        <div class="app__header-action">
          <ul>
           <li>
           <div class="nav-item p-relative">
             <a id="langdropdown" class="langdropdown" href="javascript:void(0)">
            <span>
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2045_21)">
                    <path d="M18.5295 15.2207C19.4935 13.6502 20.0025 11.8429 20 10.0002C20.0025 8.15741 19.4935 6.34975 18.5295 4.77922L18.524 4.77065C17.6296 3.31298 16.3765 2.10901 14.8841 1.27379C13.3918 0.438574 11.7102 6.98837e-06 10 0C8.28987 -6.98804e-06 6.60828 0.438545 5.11595 1.27375C3.62361 2.10896 2.37039 3.31292 1.47604 4.77057L1.47048 4.77925C0.508875 6.35086 7.13768e-06 8.15752 0 10C-7.13739e-06 11.8425 0.508846 13.6491 1.47044 15.2207L1.47609 15.2295C2.37045 16.6871 3.62366 17.8911 5.11599 18.7263C6.60832 19.5615 8.28989 20 10 20C11.7102 20 13.3917 19.5615 14.8841 18.7262C16.3764 17.891 17.6296 16.6871 18.5239 15.2294L18.5295 15.2207ZM11.2782 18.2861C11.0876 18.47 10.8684 18.6215 10.6289 18.7345C10.4324 18.8279 10.2175 18.8764 10 18.8764C9.78245 18.8764 9.56755 18.8279 9.37109 18.7345C8.91545 18.5018 8.52543 18.1586 8.23666 17.7363C7.64692 16.8841 7.20987 15.9358 6.94506 14.9339C7.96235 14.8713 8.98065 14.8395 10 14.8383C11.0189 14.8383 12.0373 14.8702 13.0551 14.9339C12.9085 15.4491 12.7255 15.9532 12.5073 16.4423C12.2199 17.1302 11.8026 17.7563 11.2782 18.2861ZM1.14315 10.5618H5.17663C5.20289 11.6873 5.32488 12.8085 5.54129 13.9133C4.43869 14.0104 3.33891 14.1435 2.24195 14.3131C1.59959 13.1606 1.22409 11.8787 1.14315 10.5618ZM2.24195 5.68691C3.33847 5.85684 4.43865 5.99013 5.54245 6.08678C5.32561 7.19151 5.20335 8.31271 5.17699 9.43818H1.14315C1.22408 8.1213 1.59959 6.83936 2.24195 5.68691ZM8.72176 1.71385C8.91231 1.52998 9.13164 1.3785 9.37109 1.2654C9.56755 1.17203 9.78245 1.12358 10 1.12358C10.2175 1.12358 10.4324 1.17203 10.6289 1.2654C11.0845 1.49813 11.4745 1.84135 11.7634 2.26367C12.3531 3.11586 12.7901 4.06413 13.0549 5.06606C12.0376 5.12866 11.0194 5.16055 10 5.16174C8.98108 5.16173 7.96271 5.12983 6.94488 5.06605C7.09146 4.5509 7.27455 4.04685 7.49275 3.55771C7.78008 2.8698 8.19736 2.24375 8.72176 1.71385ZM18.8568 9.43818H14.8234C14.7971 8.31271 14.6751 7.19149 14.4587 6.08668C15.5614 5.98966 16.6611 5.8564 17.7581 5.68691C18.4005 6.83936 18.7759 8.1213 18.8568 9.43818ZM6.67136 13.8259C6.45163 12.751 6.32753 11.6586 6.30052 10.5618H13.6996C13.6728 11.6586 13.5489 12.751 13.3295 13.826C12.2208 13.7533 11.111 13.7161 10 13.7146C8.88978 13.7146 7.78024 13.7517 6.67136 13.8259ZM13.3286 6.17404C13.5484 7.24901 13.6725 8.34134 13.6995 9.43818H6.30039C6.32715 8.34134 6.45103 7.24899 6.67056 6.17398C7.77915 6.24672 8.88896 6.28383 10 6.28532C11.1102 6.28532 12.2197 6.24822 13.3286 6.17404ZM14.823 10.5618H18.8568C18.7759 11.8787 18.4004 13.1606 17.758 14.3131C16.6615 14.1431 15.5614 14.0098 14.4575 13.9132C14.6744 12.8085 14.7966 11.6873 14.823 10.5618ZM17.0844 4.65275C16.1256 4.79108 15.164 4.90059 14.1995 4.9813C14.0262 4.33593 13.8026 3.7051 13.5309 3.0946C13.2828 2.53279 12.9706 2.00154 12.6006 1.51138C14.3889 2.05982 15.9582 3.15928 17.0844 4.65275ZM3.72341 3.7234C4.74923 2.69661 6.01126 1.93712 7.39889 1.51152C7.37784 1.53878 7.35618 1.56485 7.33543 1.59267C6.62219 2.61941 6.10266 3.76789 5.80247 4.98147C4.83795 4.89978 3.87567 4.79021 2.91564 4.65275C3.16324 4.32479 3.43313 4.01427 3.72341 3.7234ZM2.91563 15.3472C3.87435 15.2089 4.83594 15.0994 5.80041 15.0187C5.97375 15.6641 6.19732 16.2949 6.46905 16.9054C6.71715 17.4672 7.02932 17.9985 7.39935 18.4886C5.61107 17.9402 4.0418 16.8406 2.91563 15.3472ZM16.2765 16.2765C15.2507 17.3034 13.9887 18.0629 12.6011 18.4885C12.6222 18.4612 12.6438 18.4352 12.6645 18.4073C13.3778 17.3805 13.8974 16.2321 14.1975 15.0185C15.1621 15.1002 16.1244 15.2098 17.0844 15.3473C16.8367 15.6752 16.5668 15.9857 16.2765 16.2765Z"fill="#7A7A7A" />
                      </g>
                      <defs>
                         <clipPath id="clip0_2045_21">
                               <rect width="20" height="20" fill="white" />
                           </clipPath>
                        </defs>
                     </svg>
                   </span>
                      <span class="language-text">English</span>
                        </a>
                      <div class="lang__dropdown">
                         <ul>
                          <li>
                            <a class="lang__item" href="#">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_647_364)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 0H28.5003V1.15386H0V0ZM0 2.30771H28.5003V3.46157H0V2.30771ZM0 4.61543H28.5003V5.76929H0V4.61543ZM0 6.92314H28.5003V8.077H0V6.92314ZM0 9.23086H28.5003V10.3847H0V9.23086ZM0 11.5386H28.5003V12.6924H0V11.5386ZM0 13.8463H28.5003V15.0001H0V13.8463Z"
                                                   fill="#BD3D44" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 1.15381H28.5003V2.30767H0V1.15381ZM0 3.46152H28.5003V4.61538H0V3.46152ZM0 5.76924H28.5003V6.9231H0V5.76924ZM0 8.07695H28.5003V9.23081H0V8.07695ZM0 10.3847H28.5003V11.5385H0V10.3847ZM0 12.6924H28.5003V13.8462H0V12.6924Z"
                                                   fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 0H11.4V8.07686H0V0Z" fill="#192F5D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0.950137 0.345703L1.05385 0.664922H1.38953L1.11795 0.862236L1.22169 1.18146L0.950107 0.98417L0.678584 1.18146L0.782295 0.862236L0.510742 0.664922H0.846396L0.950137 0.345703ZM2.85013 0.345703L2.95387 0.664922H3.28955L3.01797 0.862236L3.12171 1.18146L2.85013 0.98417L2.5786 1.18146L2.68231 0.862236L2.41076 0.664922H2.74642L2.85013 0.345703ZM4.75021 0.345703L4.85392 0.664922H5.1896L4.91802 0.862236L5.02176 1.18146L4.75021 0.98417L4.47865 1.18146L4.58236 0.862236L4.31081 0.664922H4.64649L4.75021 0.345703ZM6.65017 0.345703L6.75388 0.664922H7.08953L6.81798 0.862236L6.92169 1.18146L6.65017 0.98417L6.37858 1.18146L6.48232 0.862236L6.21074 0.664922H6.54643L6.65017 0.345703ZM8.55021 0.345703L8.65393 0.664922H8.98961L8.71803 0.862236L8.82177 1.18146L8.55019 0.98417L8.27866 1.18146L8.38237 0.862236L8.11082 0.664922H8.44647L8.55021 0.345703ZM10.4503 0.345703L10.554 0.664922H10.8897L10.6181 0.862236L10.7218 1.18146L10.4503 0.98417L10.1787 1.18146L10.2825 0.862236L10.0109 0.664922H10.3466L10.4503 0.345703ZM1.90018 1.15342L2.00389 1.47264H2.33957L2.06799 1.66992L2.17176 1.98917L1.90018 1.79188L1.62862 1.98917L1.73233 1.66992L1.46078 1.47264H1.79646L1.90018 1.15342ZM3.80014 1.15342L3.90385 1.47264H4.2395L3.96795 1.66992L4.07166 1.98917L3.80014 1.79188L3.52855 1.98917L3.63229 1.66992L3.36071 1.47264H3.6964L3.80014 1.15342ZM5.70019 1.15342L5.8039 1.47264H6.13958L5.868 1.66992L5.97174 1.98917L5.70016 1.79188L5.42863 1.98917L5.53234 1.66992L5.26079 1.47264H5.59645L5.70019 1.15342ZM7.60023 1.15342L7.70395 1.47264H8.03963L7.76805 1.66992L7.87179 1.98917L7.60023 1.79188L7.32865 1.98917L7.43245 1.66992L7.16087 1.47264H7.49655L7.60023 1.15342ZM9.5002 1.15342L9.60391 1.47264H9.93956L9.66801 1.66992L9.77172 1.98917L9.5002 1.79188L9.22861 1.98917L9.33235 1.66992L9.06077 1.47264H9.39646L9.5002 1.15342ZM0.950137 1.9611L1.05385 2.28032H1.38953L1.11795 2.47764L1.22169 2.79686L0.950107 2.59957L0.678584 2.79686L0.782295 2.47764L0.510742 2.28032H0.846396L0.950137 1.9611ZM2.85013 1.9611L2.95387 2.28032H3.28955L3.01797 2.47764L3.12171 2.79686L2.85013 2.59957L2.5786 2.79686L2.68231 2.47764L2.41076 2.28032H2.74642L2.85013 1.9611ZM4.75021 1.9611L4.85392 2.28032H5.1896L4.91802 2.47764L5.02176 2.79686L4.75021 2.59957L4.47865 2.79686L4.58236 2.47764L4.31081 2.28032H4.64649L4.75021 1.9611ZM6.65017 1.9611L6.75388 2.28032H7.08953L6.81798 2.47764L6.92169 2.79686L6.65017 2.59957L6.37858 2.79686L6.48232 2.47764L6.21074 2.28032H6.54643L6.65017 1.9611ZM8.55021 1.9611L8.65393 2.28032H8.98961L8.71803 2.47764L8.82177 2.79686L8.55019 2.59957L8.27866 2.79686L8.38237 2.47764L8.11082 2.28032H8.44647L8.55021 1.9611ZM10.4503 1.9611L10.554 2.28032H10.8897L10.6181 2.47764L10.7218 2.79686L10.4503 2.59957L10.1787 2.79686L10.2825 2.47764L10.0109 2.28032H10.3466L10.4503 1.9611ZM1.90018 2.76879L2.00389 3.08804H2.33957L2.06799 3.28532L2.17176 3.60457L1.90018 3.40729L1.62862 3.60457L1.73233 3.28532L1.46078 3.08804H1.79646L1.90018 2.76879ZM3.80014 2.76879L3.90385 3.08804H4.2395L3.96795 3.28532L4.07166 3.60457L3.80014 3.40729L3.52855 3.60457L3.63229 3.28532L3.36071 3.08804H3.6964L3.80014 2.76879ZM5.70019 2.76879L5.8039 3.08804H6.13958L5.868 3.28532L5.97174 3.60457L5.70016 3.40729L5.42863 3.60457L5.53234 3.28532L5.26079 3.08804H5.59645L5.70019 2.76879ZM7.60023 2.76879L7.70395 3.08804H8.03963L7.76805 3.28532L7.87179 3.60457L7.60023 3.40729L7.32865 3.60457L7.43242 3.28532L7.16084 3.08804H7.49652L7.60023 2.76879ZM9.5002 2.76879L9.60391 3.08804H9.93956L9.66801 3.28532L9.77172 3.60457L9.5002 3.40729L9.22861 3.60457L9.33235 3.28532L9.06077 3.08804H9.39646L9.5002 2.76879ZM0.950137 3.5765L1.05385 3.89572H1.38953L1.11795 4.09304L1.22169 4.41226L0.950107 4.21497L0.678584 4.41226L0.782295 4.09304L0.510742 3.89572H0.846396L0.950137 3.5765ZM2.85013 3.5765L2.95387 3.89572H3.28955L3.01797 4.09304L3.12171 4.41226L2.85013 4.21497L2.5786 4.41226L2.68231 4.09304L2.41076 3.89572H2.74642L2.85013 3.5765ZM4.75021 3.5765L4.85392 3.89572H5.1896L4.91802 4.09304L5.02176 4.41226L4.75021 4.21497L4.47865 4.41226L4.58236 4.09304L4.31081 3.89572H4.64649L4.75021 3.5765ZM6.65017 3.5765L6.75388 3.89572H7.08953L6.81798 4.09304L6.92169 4.41226L6.65017 4.21497L6.37858 4.41226L6.48232 4.09304L6.21074 3.89572H6.54643L6.65017 3.5765ZM8.55021 3.5765L8.65393 3.89572H8.98961L8.71803 4.09304L8.82177 4.41226L8.55019 4.21497L8.27866 4.41226L8.38237 4.09304L8.11082 3.89572H8.44647L8.55021 3.5765ZM10.4503 3.5765L10.554 3.89572H10.8897L10.6181 4.09304L10.7218 4.41226L10.4503 4.21497L10.1787 4.41226L10.2825 4.09304L10.0109 3.89572H10.3466L10.4503 3.5765ZM1.90018 4.38419L2.00389 4.70344H2.33957L2.06799 4.90072L2.17176 5.21997L1.90018 5.02269L1.62862 5.21997L1.73233 4.90072L1.46078 4.70344H1.79646L1.90018 4.38419ZM3.80014 4.38419L3.90385 4.70344H4.2395L3.96795 4.90072L4.07166 5.21997L3.80014 5.02269L3.52855 5.21997L3.63229 4.90072L3.36071 4.70344H3.6964L3.80014 4.38419ZM5.70019 4.38419L5.8039 4.70344H6.13958L5.868 4.90072L5.97174 5.21997L5.70016 5.02269L5.42863 5.21997L5.53234 4.90072L5.26079 4.70344H5.59645L5.70019 4.38419ZM7.60023 4.38419L7.70395 4.70344H8.03963L7.76805 4.90072L7.87179 5.21997L7.60023 5.02269L7.32865 5.21997L7.43242 4.90072L7.16084 4.70344H7.49652L7.60023 4.38419ZM9.5002 4.38419L9.60391 4.70344H9.93956L9.66801 4.90072L9.77172 5.21997L9.5002 5.02269L9.22861 5.21997L9.33235 4.90072L9.06077 4.70344H9.39646L9.5002 4.38419ZM0.950137 5.1919L1.05385 5.51112H1.38953L1.11795 5.70844L1.22169 6.02766L0.950107 5.83037L0.678584 6.02766L0.782295 5.70844L0.510742 5.51112H0.846396L0.950137 5.1919ZM2.85013 5.1919L2.95387 5.51112H3.28955L3.01797 5.70844L3.12171 6.02766L2.85013 5.83037L2.5786 6.02766L2.68231 5.70844L2.41076 5.51112H2.74642L2.85013 5.1919ZM4.75021 5.1919L4.85392 5.51112H5.1896L4.91802 5.70844L5.02176 6.02766L4.75021 5.83037L4.47865 6.02766L4.58236 5.70844L4.31081 5.51112H4.64649L4.75021 5.1919ZM6.65017 5.1919L6.75388 5.51112H7.08953L6.81798 5.70844L6.92169 6.02766L6.65017 5.83037L6.37858 6.02766L6.48232 5.70844L6.21074 5.51112H6.54643L6.65017 5.1919ZM8.55021 5.1919L8.65393 5.51112H8.98961L8.71803 5.70844L8.82177 6.02766L8.55019 5.83037L8.27866 6.02766L8.38237 5.70844L8.11082 5.51112H8.44647L8.55021 5.1919ZM10.4503 5.1919L10.554 5.51112H10.8897L10.6181 5.70844L10.7218 6.02766L10.4503 5.83037L10.1787 6.02766L10.2825 5.70844L10.0109 5.51112H10.3466L10.4503 5.1919ZM1.90018 5.99959L2.00389 6.31884H2.33957L2.06799 6.51612L2.17176 6.83537L1.90018 6.63809L1.62862 6.83537L1.73233 6.51612L1.46078 6.31884H1.79646L1.90018 5.99959ZM3.80014 5.99959L3.90385 6.31884H4.2395L3.96795 6.51612L4.07166 6.83537L3.80014 6.63809L3.52855 6.83537L3.63229 6.51612L3.36071 6.31884H3.6964L3.80014 5.99959ZM5.70019 5.99959L5.8039 6.31884H6.13958L5.868 6.51612L5.97174 6.83537L5.70016 6.63809L5.42863 6.83537L5.53234 6.51612L5.26079 6.31884H5.59645L5.70019 5.99959ZM7.60023 5.99959L7.70395 6.31884H8.03963L7.76805 6.51612L7.87179 6.83537L7.60023 6.63809L7.32865 6.83537L7.43242 6.51612L7.16084 6.31884H7.49652L7.60023 5.99959ZM9.5002 5.99959L9.60391 6.31884H9.93956L9.66801 6.51612L9.77172 6.83537L9.5002 6.63809L9.22861 6.83537L9.33235 6.51612L9.06077 6.31884H9.39646L9.5002 5.99959ZM0.950137 6.8073L1.05385 7.12652H1.38953L1.11795 7.32384L1.22169 7.64306L0.950107 7.44577L0.678584 7.64306L0.782295 7.32384L0.510742 7.12652H0.846396L0.950137 6.8073ZM2.85013 6.8073L2.95387 7.12652H3.28955L3.01797 7.32384L3.12171 7.64306L2.85013 7.44577L2.5786 7.64306L2.68231 7.32384L2.41076 7.12652H2.74642L2.85013 6.8073ZM4.75021 6.8073L4.85392 7.12652H5.1896L4.91802 7.32384L5.02176 7.64306L4.75021 7.44577L4.47865 7.64306L4.58236 7.32384L4.31081 7.12652H4.64649L4.75021 6.8073ZM6.65017 6.8073L6.75388 7.12652H7.08953L6.81798 7.32384L6.92169 7.64306L6.65017 7.44577L6.37858 7.64306L6.48232 7.32384L6.21074 7.12652H6.54643L6.65017 6.8073ZM8.55021 6.8073L8.65393 7.12652H8.98961L8.71803 7.32384L8.82177 7.64306L8.55019 7.44577L8.27866 7.64306L8.38237 7.32384L8.11082 7.12652H8.44647L8.55021 6.8073ZM10.4503 6.8073L10.554 7.12652H10.8897L10.6181 7.32384L10.7218 7.64306L10.4503 7.44577L10.1787 7.64306L10.2825 7.32384L10.0109 7.12652H10.3466L10.4503 6.8073Z"
                                                   fill="white" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_647_364">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>English</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="#">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_650_408)">
                                                <path d="M0 0H20V5H0V0Z" fill="#00732F" />
                                                <path d="M0 5H20V10H0V5Z" fill="white" />
                                                <path d="M0 10H20V15H0V10Z" fill="black" />
                                                <path d="M0 0H6.875V15H0V0Z" fill="#FF0000" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_650_408">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>لعربية</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="#">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_650_394)">
                                                <path d="M0 0H20V15H0V0Z" fill="#DE2910" />
                                                <path
                                                   d="M2.4269 5.5725L3.74988 1.5L5.07287 5.5725L1.60791 3.0525H5.89186L2.4269 5.5725Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M8.25704 1.56588L6.86593 1.88534L7.8037 0.809307L7.67681 2.23181L6.94284 1.00688L8.25704 1.56588Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M9.66184 3.3445L8.25572 3.09942L9.53741 2.47132L8.86876 3.73327L8.66731 2.31955L9.66184 3.3445Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M9.46176 5.84138L8.27787 5.04411L9.70428 4.99338L8.57909 5.87289L8.97174 4.49993L9.46176 5.84138Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M7.69664 7.47561L6.91253 6.28295L8.24786 6.78708L6.87029 7.16375L7.76274 6.04899L7.69664 7.47561Z"
                                                   fill="#FFDE00" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_650_394">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>简体中文</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="#">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_651_428)">
                                                <path d="M0 10H20V15.0001H0V10Z" fill="#FFCE00" />
                                                <path d="M0 0H20V5H0V0Z" fill="black" />
                                                <path d="M0 5H20V10H0V5Z" fill="#DD0000" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_651_428">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>Deutsch</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="#">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_651_427)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H20V15H0V0Z"
                                                   fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 0H6.66678V15H0V0Z" fill="#00267F" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M13.333 0H19.9998V15H13.333V0Z" fill="#F31830" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_651_427">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>Français</span>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                           <div class="nav-item">
                              <div class="notification__icon">
                                 <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7.47106 21.549C7.09156 21.549 6.78356 21.2417 6.78356 20.8615V14.7984H0.6875C0.308 14.7984 0 14.4911 0 14.1109C0 13.7308 0.308 13.4234 0.6875 13.4234H7.47106C7.85056 13.4234 8.15856 13.7308 8.15856 14.1109V20.8615C8.15856 21.2417 7.85056 21.549 7.47106 21.549V21.549ZM14.5289 21.5318C14.1494 21.5318 13.8414 21.2245 13.8414 20.8443V14.0601C13.8414 13.6799 14.1494 13.3726 14.5289 13.3726H21.2795C21.659 13.3726 21.967 13.6799 21.967 14.0601C21.967 14.4403 21.659 14.7476 21.2795 14.7476H15.2164V20.8443C15.2164 21.2245 14.9084 21.5318 14.5289 21.5318V21.5318ZM7.47106 8.17644H0.7205C0.341 8.17644 0.033 7.86912 0.033 7.48894C0.033 7.10875 0.341 6.80144 0.7205 6.80144H6.78356V0.704688C6.78356 0.3245 7.09156 0.0171875 7.47106 0.0171875C7.85056 0.0171875 8.15856 0.3245 8.15856 0.704688V7.48894C8.15856 7.86844 7.85056 8.17644 7.47106 8.17644ZM21.3125 8.12556H14.5289C14.1494 8.12556 13.8414 7.81825 13.8414 7.43806V0.6875C13.8414 0.307312 14.1494 0 14.5289 0C14.9084 0 15.2164 0.307312 15.2164 0.6875V6.75056H21.3125C21.692 6.75056 22 7.05788 22 7.43806C22 7.81825 21.692 8.12556 21.3125 8.12556Z"
                                       fill="#7A7A7A" />
                                 </svg>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <div class="nav-item p-relative">
                           <a id="emaildropdown" href="#">
                              <div class="notification__icon">
                                 <svg width="22" height="16" viewBox="0 0 22 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M20.0001 0H1.99998C0.895427 0 0 0.895428 0 2.00003V14.0001C0 15.1046 0.895427 16 1.99998 16H20C21.1046 16 22 15.1046 22 14.0001V2.00003C22 0.895428 21.1046 0 20.0001 0ZM1.99998 1.00001H20C20.1143 1.00074 20.2276 1.02103 20.335 1.06L11.68 9.71504C11.3083 10.0892 10.7036 10.0912 10.3295 9.71946C10.328 9.718 10.3265 9.7165 10.325 9.71504L1.665 1.06C1.77242 1.02103 1.88573 1.0007 1.99998 1.00001ZM1.00001 14V2.00003C0.9949 1.9418 0.9949 1.88324 1.00001 1.82502L7.19002 8.00002L1.00001 14.175C0.9949 14.1168 0.9949 14.0582 1.00001 14ZM20.0001 15H1.99998C1.88573 14.9993 1.77242 14.979 1.665 14.94L7.89999 8.70506L9.61501 10.4201C10.3771 11.185 11.6149 11.1873 12.3798 10.4253C12.3816 10.4236 12.3833 10.4218 12.385 10.4201L14.1 8.70506L20.335 14.94C20.2276 14.979 20.1143 14.9993 20.0001 15ZM21 14.175L14.81 8.00002L21 1.82502C21.0051 1.88324 21.0051 1.9418 21 2.00003V14.0001C21.0051 14.0582 21.0051 14.1168 21 14.175Z"
                                       fill="#7A7A7A" />
                                 </svg>
                              </div>
                           </a>
                           <div class="email__dropdown">
                              <div class="notification__card card__scroll">
                                 <div class="notification__header">
                                    <div class="notification__inner">
                                       <h5>Email Notifications</h5>
                                       <span>(14)</span>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/02.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/01.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/03.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/04.png"
                                             alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/02.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/01.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/03.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/user/notifactuion/04.png"
                                             alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="chat.html">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="nav-item p-relative">
                           <a id="notifydropdown" href="#">
                              <div class="notification__icon">
                                 <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_209_757)">
                                       <path
                                          d="M9.1665 22C7.27185 22 5.729 20.4582 5.729 18.5625C5.729 18.183 6.037 17.875 6.4165 17.875C6.79601 17.875 7.104 18.183 7.104 18.5625C7.104 19.7002 8.02985 20.625 9.1665 20.625C10.3032 20.625 11.229 19.7002 11.229 18.5625C11.229 18.183 11.537 17.875 11.9165 17.875C12.296 17.875 12.604 18.183 12.604 18.5625C12.604 20.4582 11.0613 22 9.1665 22Z"
                                          fill="#7A7A7A" />
                                       <path
                                          d="M16.7291 19.2499H1.60411C0.719559 19.2499 0 18.5304 0 17.6458C0 17.1764 0.204437 16.7319 0.560944 16.4266C0.583939 16.4065 0.608612 16.3882 0.634293 16.3715C1.97992 15.1973 2.75 13.5079 2.75 11.724V9.16655C2.75 6.18106 4.77306 3.61805 7.66975 2.93323C8.04002 2.84797 8.41046 3.07439 8.49757 3.44483C8.58452 3.81426 8.35541 4.18453 7.98698 4.27164C5.71266 4.80875 4.125 6.82174 4.125 9.16655V11.724C4.125 13.9388 3.15417 16.0343 1.46396 17.4724C1.4502 17.4835 1.43828 17.4936 1.42351 17.5037C1.39883 17.5349 1.375 17.5826 1.375 17.6458C1.375 17.7704 1.47957 17.8749 1.60411 17.8749H16.7291C16.8538 17.8749 16.9584 17.7704 16.9584 17.6458C16.9584 17.5815 16.9346 17.5349 16.9089 17.5037C16.8951 17.4936 16.8822 17.4835 16.8694 17.4724C16.0482 16.7722 15.3999 15.9271 14.9436 14.9599C14.7804 14.617 14.9269 14.2073 15.2707 14.0442C15.6173 13.881 16.0233 14.0296 16.1856 14.3723C16.5485 15.1387 17.0573 15.8116 17.7008 16.3744C17.7246 16.3908 17.7495 16.4083 17.7704 16.4266C18.129 16.7319 18.3334 17.1764 18.3334 17.6458C18.3334 18.5304 17.6138 19.2499 16.7291 19.2499Z"
                                          fill="#7A7A7A" />
                                       <path
                                          d="M16.0417 11.9166C12.7565 11.9166 10.0835 9.24365 10.0835 5.95839C10.0835 2.67296 12.7565 0 16.0417 0C19.3271 0 22.0001 2.67296 22.0001 5.95839C22.0001 9.24365 19.3271 11.9166 16.0417 11.9166ZM16.0417 1.375C13.5145 1.375 11.4585 3.43112 11.4585 5.95839C11.4585 8.48566 13.5145 10.5416 16.0417 10.5416C18.569 10.5416 20.6251 8.48566 20.6251 5.95839C20.6251 3.43112 18.569 1.375 16.0417 1.375Z"
                                          fill="#7A7A7A" />
                                       <path
                                          d="M16.2709 8.70828C15.8914 8.70828 15.5834 8.40028 15.5834 8.02078V5.0415H15.125C14.7455 5.0415 14.4375 4.73351 14.4375 4.354C14.4375 3.9745 14.7455 3.6665 15.125 3.6665H16.2709C16.6504 3.6665 16.9584 3.9745 16.9584 4.354V8.02078C16.9584 8.40028 16.6504 8.70828 16.2709 8.70828Z"
                                          fill="#7A7A7A" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_209_757">
                                          <rect width="22" height="22" fill="white" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </div>
                           </a>
                           <div class="notification__dropdown">
                              <div class="notification__card card__scroll">
                                 <div class="notification__header">
                                    <div class="notification__inner">
                                       <h5>Notifications</h5>
                                       <span>(10)</span>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/01.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Mark your calendar for BITPA
                                          Conference Dhaka Meet up 2023</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/02.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Get ready for today’s Business Conference Tokyo Meet up - 2023!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                       <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/03.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>You don’t want to miss Digital Innovation Meet up!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/04.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Digital Innovation Meet up Canada - 2023 starts in 5 minutes!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/05.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Mark your calendar for BITPA
                                          Conference Dhaka Meet up 2023</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/06.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>You don’t want to miss Digital Innovation Meet up!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/07.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Digital Innovation Meet up Canada - 2023 starts in 5 minutes!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="profile.html"><img src="assets/img/meta/chatbox/08.png" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Meet the speakers at Cyber Security Conference Meet up Japan!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="nav-item p-relative">
                  <a id="userportfolio" href="#">
                     <div class="user__portfolio">
                        <div class="user__portfolio-thumb">
                           <img src="{{url('assets/img/user/1/01.png')}}" alt="imge not found">
                        </div>
                        <div class="user__content">
                           <span>Jhon Smith</span>
                        </div>
                     </div>
                  </a>
                  <div class="user__dropdown">
                     <ul>
                        <li>
                           <a href="profile.html"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_643_344)">
                                    <path
                                       d="M13.6569 10.3431C12.7855 9.47181 11.7484 8.82678 10.6168 8.43631C11.8288 7.60159 12.625 6.20463 12.625 4.625C12.625 2.07478 10.5502 0 8 0C5.44978 0 3.375 2.07478 3.375 4.625C3.375 6.20463 4.17122 7.60159 5.38319 8.43631C4.25162 8.82678 3.2145 9.47181 2.34316 10.3431C0.832156 11.8542 0 13.8631 0 16H1.25C1.25 12.278 4.27803 9.25 8 9.25C11.722 9.25 14.75 12.278 14.75 16H16C16 13.8631 15.1678 11.8542 13.6569 10.3431ZM8 8C6.13903 8 4.625 6.486 4.625 4.625C4.625 2.764 6.13903 1.25 8 1.25C9.86097 1.25 11.375 2.764 11.375 4.625C11.375 6.486 9.86097 8 8 8Z"
                                       fill="#7A7A7A" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_643_344">
                                       <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                              Profile</a>
                        </li>
                        <li>
                           <a href="chat.html"><svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M4.2 16.8C4.1118 16.8 4.023 16.7802 3.9396 16.7406C3.7326 16.6404 3.6 16.431 3.6 16.2V13.2H1.8C0.8076 13.2 0 12.3924 0 11.4V1.8C0 0.8076 0.8076 0 1.8 0H16.2C17.1924 0 18 0.8076 18 1.8V11.4C18 12.3924 17.1924 13.2 16.2 13.2H8.9106L4.575 16.6686C4.4664 16.7556 4.3338 16.8 4.2 16.8ZM1.8 1.2C1.4688 1.2 1.2 1.4694 1.2 1.8V11.4C1.2 11.7306 1.4688 12 1.8 12H4.2C4.5318 12 4.8 12.2682 4.8 12.6V14.952L8.325 12.1314C8.4318 12.0462 8.5632 12 8.7 12H16.2C16.5312 12 16.8 11.7306 16.8 11.4V1.8C16.8 1.4694 16.5312 1.2 16.2 1.2H1.8Z"
                                    fill="#7A7A7A" />
                                 <path
                                    d="M13.8001 6.00005H4.2001C3.8683 6.00005 3.6001 5.73125 3.6001 5.40005C3.6001 5.06885 3.8683 4.80005 4.2001 4.80005H13.8001C14.1319 4.80005 14.4001 5.06885 14.4001 5.40005C14.4001 5.73125 14.1319 6.00005 13.8001 6.00005Z"
                                    fill="#7A7A7A" />
                                 <path
                                    d="M9.0001 8.39995H4.2001C3.8683 8.39995 3.6001 8.13115 3.6001 7.79995C3.6001 7.46875 3.8683 7.19995 4.2001 7.19995H9.0001C9.3319 7.19995 9.6001 7.46875 9.6001 7.79995C9.6001 8.13115 9.3319 8.39995 9.0001 8.39995Z"
                                    fill="#7A7A7A" />
                              </svg>
                              chat</a>
                        </li>
                        <li>
                           <a href="chat.html"><svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M16.418 0H1.58203C0.711492 0 0 0.708363 0 1.58203V11.0742C0 11.9482 0.711949 12.6562 1.58203 12.6562H16.418C17.2885 12.6562 18 11.9479 18 11.0742V1.58203C18 0.708152 17.2882 0 16.418 0ZM16.175 1.05469C15.6636 1.56786 9.65549 7.59551 9.40866 7.84315C9.2025 8.04994 8.79761 8.05008 8.59134 7.84315L1.82496 1.05469H16.175ZM1.05469 10.8803V1.77592L5.59213 6.32812L1.05469 10.8803ZM1.82496 11.6016L6.3367 7.07512L7.84438 8.58772C8.46221 9.20756 9.53803 9.20732 10.1557 8.58772L11.6633 7.07516L16.175 11.6016H1.82496ZM16.9453 10.8803L12.4079 6.32812L16.9453 1.77592V10.8803Z"
                                    fill="#7A7A7A" />
                              </svg>
                              inbox
                           </a>
                        </li>
                        <li>
                           <a href="signin.html"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.9224 9.03197C12.5765 8.86754 12.2235 8.7259 11.8644 8.60724C13.0275 7.73424 13.7812 6.34413 13.7812 4.78125C13.7812 2.14488 11.6364 0 8.99999 0C6.36359 0 4.21874 2.14488 4.21874 4.78125C4.21874 6.34585 4.97418 7.73734 6.13943 8.61016C5.07181 8.96165 4.07003 9.50858 3.19323 10.2298C1.58546 11.5522 0.4676 13.3969 0.0456193 15.4239C-0.0866386 16.059 0.0718107 16.7114 0.480256 17.2136C0.886698 17.7134 1.48938 18 2.13373 18H10.793C11.1813 18 11.4961 17.6852 11.4961 17.2969C11.4961 16.9086 11.1813 16.5938 10.793 16.5938H2.13373C1.83356 16.5938 1.65247 16.4262 1.57126 16.3264C1.43102 16.1539 1.37674 15.9295 1.42234 15.7105C2.15201 12.2056 5.24351 9.64527 8.8136 9.55892C8.87544 9.56131 8.93756 9.56251 8.99999 9.56251C9.06303 9.56251 9.12578 9.56128 9.18822 9.55885C10.2823 9.58452 11.3345 9.8342 12.3187 10.3021C12.6694 10.4687 13.0888 10.3196 13.2556 9.96885C13.4223 9.61813 13.2731 9.19868 12.9224 9.03197ZM9.17149 8.15193C9.11443 8.15091 9.05726 8.15039 8.99999 8.15039C8.94325 8.15039 8.88651 8.15095 8.82984 8.152C7.04759 8.06309 5.62499 6.58519 5.62499 4.78125C5.62499 2.92026 7.139 1.40625 8.99999 1.40625C10.861 1.40625 12.375 2.92026 12.375 4.78125C12.375 6.58474 10.9531 8.06236 9.17149 8.15193Z"
                                    fill="#7A7A7A" />
                                 <path
                                    d="M17.2969 13.957H15.3633V12.0234C15.3633 11.6351 15.0485 11.3203 14.6602 11.3203C14.2718 11.3203 13.957 11.6351 13.957 12.0234V13.957H12.0234C11.6351 13.957 11.3203 14.2718 11.3203 14.6602C11.3203 15.0485 11.6351 15.3633 12.0234 15.3633H13.957V17.2969C13.957 17.6852 14.2718 18 14.6602 18C15.0485 18 15.3633 17.6852 15.3633 17.2969V15.3633H17.2969C17.6852 15.3633 18 15.0485 18 14.6602C18 14.2718 17.6852 13.957 17.2969 13.957Z"
                                    fill="#7A7A7A" />
                              </svg>
                              add acount
                           </a>
                        </li>
                        <li>
                           <a href="signin.html"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_643_343)">
                                    <path
                                       d="M17.4368 8.43771H10.312C10.0015 8.43771 9.74951 8.18572 9.74951 7.87523C9.74951 7.56474 10.0015 7.31274 10.312 7.31274H17.4368C17.7473 7.31274 17.9993 7.56474 17.9993 7.87523C17.9993 8.18572 17.7473 8.43771 17.4368 8.43771Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M14.6244 11.2502C14.4803 11.2502 14.3364 11.1954 14.2268 11.0852C14.0071 10.8654 14.0071 10.5091 14.2268 10.2894L16.6418 7.87457L14.2268 5.45958C14.0071 5.23986 14.0071 4.88364 14.2268 4.66392C14.4467 4.44406 14.8029 4.44406 15.0226 4.66392L17.835 7.47633C18.0547 7.69605 18.0547 8.05227 17.835 8.27199L15.0226 11.0844C14.9123 11.1954 14.7684 11.2502 14.6244 11.2502Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M5.99986 18.0002C5.83932 18.0002 5.68703 17.9776 5.53488 17.9304L1.02142 16.4267C0.407305 16.2122 0 15.64 0 15.0003V1.50073C0 0.673487 0.672754 0.000732422 1.5 0.000732422C1.66039 0.000732422 1.81269 0.0232537 1.96498 0.0704934L6.4783 1.5742C7.09255 1.7887 7.49972 2.36093 7.49972 3.00059V16.5002C7.49972 17.3274 6.8271 18.0002 5.99986 18.0002ZM1.5 1.1257C1.29374 1.1257 1.12496 1.29447 1.12496 1.50073V15.0003C1.12496 15.16 1.23222 15.3085 1.3852 15.3617L5.8775 16.8587C5.90977 16.8692 5.95179 16.8752 5.99986 16.8752C6.20612 16.8752 6.37475 16.7064 6.37475 16.5002V3.00059C6.37475 2.84088 6.2675 2.69244 6.11452 2.63915L1.62222 1.14218C1.58995 1.13174 1.54793 1.1257 1.5 1.1257Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M11.4371 6.00035C11.1266 6.00035 10.8746 5.74836 10.8746 5.43786V2.06297C10.8746 1.54622 10.454 1.12545 9.93722 1.12545H1.49998C1.18949 1.12545 0.9375 0.873462 0.9375 0.562971C0.9375 0.252479 1.18949 0.000488281 1.49998 0.000488281H9.93722C11.075 0.000488281 11.9996 0.925234 11.9996 2.06297V5.43786C11.9996 5.74836 11.7476 6.00035 11.4371 6.00035Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M9.93699 15.7501H6.93699C6.6265 15.7501 6.37451 15.4981 6.37451 15.1876C6.37451 14.8771 6.6265 14.6251 6.93699 14.6251H9.93699C10.4537 14.6251 10.8744 14.2044 10.8744 13.6876V10.3127C10.8744 10.0022 11.1264 9.75024 11.4369 9.75024C11.7473 9.75024 11.9993 10.0022 11.9993 10.3127V13.6876C11.9993 14.8254 11.0747 15.7501 9.93699 15.7501Z"
                                       fill="#7A7A7A" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_643_343">
                                       <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                              Log in</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body__overlay"></div>
      <!-- App header area end -->

         <!-- App side area start -->
            <div class="app__slide-wrapper">
               <div class="breadcrumb__area">
                  <div class="breadcrumb__wrapper mb-35">
                     <div class="breadcrumb__main">
                        <div class="breadcrumb__inner">
                           <div class="breadcrumb__icon">
                              <i class="flaticon-home"></i>
                           </div>
                           <div class="breadcrumb__menu">
                              <nav>
                                 <ul>
                                   <li><span><a href="dashboard.html">Home</a></span></li>
                                    <li class="active"><span>Profile</span></li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="profile__area">
                        <div class="body__card-wrapper mb-20">
                           <div class="card__header-top">
                              <div class="card__title-inner">
                                 <h4 class="event__information-title">Profile Information</h4>
                              </div>
                              <div class="card__header-dropdown">
                                 <div class="dropdown">
                                    <button>
                                       <svg width="14" height="4" viewBox="0 0 14 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z" fill="#7A7A7A"/>
                                          <path d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z" fill="#7A7A7A"/>
                                          <path d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z" fill="#7A7A7A"/>
                                          </svg>                                          
                                    </button>
                                    <div class="dropdown-list">
                                       <a class="dropdown__item" href="javascript:void(0)">Edit</a>
                                       <a class="dropdown__item" href="javascript:void(0)">Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="profile__main-wrapper mt-35">
                              <div class="row">
                                 <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                                    <div class="profile__left">
                                       <div class="padding__left-inner p-relative">
                                          <a href="setting.html">
                                             <div class="profile__edit">
                                                <i class="flaticon-edit"></i>
                                             </div>
                                          </a>
                                         
                                          <div class="profile__thumb mb-45">
                                             <img src="{{url('assets/img/speaker/list/04.jpg')}}" alt="image not found">
                                          </div>
                                          <div class="profile__user">
                                             <ul>
                                                <li>
                                                <form method="POST" action="{{ route('update10', ['id' => $user->id]) }}">
                                                  @csrf
                                                   <!-- <div class="profile__user-item">
                                                      <div class="profile__user-tiitle">
                                                         <span>First Name:</span>
                                                      </div>
                                                      <div class="profile__user-info">
                                                      <input id="name" type="text" placeholder="Enter name"class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
                                                     <span class="invalid-feedback" role="alert">
                                                      @error('name')
                                                     <strong>{{ $message }}</strong>
                                                      @enderror
                                                      </span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="profile__user-item">
                                                      <div class="profile__user-tiitle">
                                                         <span>Email Address:</span>
                                                      </div>
                                                      <div class="profile__user-info">
                                                      <input id="email" type="email" placeholder="Enter Email"class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email">

                               
<span class="invalid-feedback" role="alert">
@error('email')    
<strong>{{ $message }}</strong>
@enderror
</span>


                                                      </div>
                                                   </div>
                                                </li>
                                                <li> -->
                                                   <div class="profile__user-item">
                                                      <div class="profile__user-tiitle">
                                                         <span>Phone Number:</span>
                                                      </div>
                                                      <div class="profile__user-info">
                                                      <input id="phone" type="text" placeholder="Enter phone"class="form-control @error('phonenumber') is-invalid @enderror" name="phone" required autocomplete="phone">
                                                       <span class="invalid-feedback text-danger" role="alert">
                                                        @error('phone')    
                                                       <strong>{{ $message }}</strong>
                                                         @enderror
                                                      </span>                                                  
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="profile__user-item">
                                                      <div class="profile__user-tiitle">
                                                         <span>Gendar:</span>
                                                      </div>
                                                      <div class="profile__user-info">
                                                         <span> Male<input type="radio"  id="gen1" placeholder="Enter gender" name="gen"  value="m">
  
                                                         Female<input type="radio"  id="gen2" placeholder="Enter gender" name="gen" value="f">
  
                                                         Other<input type="radio"  id="gen3" placeholder="Enter gender" name="gen" value="o">
 

                                                <span class="text-danger">
                                               @error('gen')
                                                  {{$message}}

                                                @enderror
                                               </span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="profile__user-item">
                                                      <div class="profile__user-tiitle">
                                                         <span>Language</span>
                                                      </div>
                                                      <div class="profile__user-info">
                                                      <input id="language" type="text" placeholder="Enter language"class="form-control @error('language') is-invalid @enderror" name="language"  required autocomplete="language" autofocus>
                                                     <span class="invalid-feedback text-danger" role="alert">
                                                      @error('language')
                                                     <strong>{{ $message }}</strong>
                                                      @enderror
                                                      </span>
                                                                                                          </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="profile__user-item">
                                                      <div class="profile__user-tiitle">
                                                         <span>Address:</span>
                                                      </div>
                                                      <div class="profile__user-info">
                                                      <input id="adderess" type="text" placeholder="Enter adderess"class="form-control @error('adderess') is-invalid @enderror" name="adderess"  required autocomplete="adderess" autofocus>
                                                     <span class="invalid-feedback text-danger" role="alert">
                                                      @error('adderess')
                                                     <strong>{{ $message }}</strong>
                                                      @enderror
                                                      </span>
                                                    
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <input type="submit" class="btn btn-primary" name="submit"id="submit">
                                             
                                             <!-- <button class="btn btn-primary">Save</button> -->
                                           </a>
                                          </div>
            </form>
                                          

                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                                    <div class="profile__right p-relative">
                                       <a href="setting.html">
                                          <div class="profile__edit">
                                             <i class="flaticon-edit"></i>
                                          </div>
                                       </a>
                                       <div class="profile__about-info">
                                          <span class="profile__title">About Me</span>
                                          <div class="profile__text">
                                             <p class="mb-25">When referring to Lorem ipsum, different expressions are used, namely fill text , fictitious text , blind text or placeholder text : in short, its meaning can also be zero, but its usefulness is so clear as to go through the centuries and resist the ironic and modern versions that came with the arrival of the web.</p>
                                             <p>consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <!-- App side area end -->
         </div>
      </div> 
      
@endsection
=======
@section('main-container')
    <div class="breadcrumb-section">
        <div class="container">
            <h2> AdminDashboard</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <li ><a href="https://vidhyasagarfoundation.intouchsoftwaresolution.com/">vidhyasagarfoundation.intouchsoftwaresolution.com</a></li>

                    </li>
                   
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space user-dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <button class="btn back-btn">
                            <i class="ri-close-line"></i><span>Close</span>
                        </button>
                        <div class="profile-top">
                            <div class="profile-top-box">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        <div class="user-round">
                                            <h4>A</h4>
                                        </div>
                                        <div class="user-icon"><input type="file" accept="image/*"><i
                                                class="ri-image-edit-line d-lg-block d-none"></i><i
                                                class="ri-pencil-fill edit-icon d-lg-none"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-detail">
                                <h5>{{Auth::user()->name}} </h5>
                                <h6>{{Auth::user()->email}} </h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul id="pills-tab" role="tablist" class="nav nav-tabs">
                                <li role="presentation" class="nav-item">
                                    <a href="{{url('/admindashboard')}}"> <button class="nav-link active" id="info-tab"
                                            data-bs-toggle="tab" data-bs-target="#info-tab-pane" type="button"
                                            role="tab">
                                            <i class="ri-home-line"></i> dashboard
                                        </button></a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="notification-tab" data-bs-toggle="tab"
                                        data-bs-target="#notification-tab-pane" type="button" role="tab">
                                        <i class="ri-notification-line"></i>
                                        Notifications
                                    </button>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="add-product-tab" data-bs-toggle="tab"
                                        data-bs-target="#add-product-tab-pane" type="button" role="tab">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        Add Product
                                    </button>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="{{url('/managecustomer')}}"><button class="nav-link" id="manage-customer-tab"
                                            data-bs-toggle="tab" data-bs-target="#manage-customer-tab-pane" type="button"
                                            role="tab">
                                            <i class="fa-solid fa-box"></i>
                                            Manage Customer
                                        </button></a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/category')}}"><button class="nav-link" id="add-category-tab"
                                            data-bs-toggle="tab" data-bs-target="#add-category-tab-pane" type="button"
                                            role="tab">
                                            <i class="fa-solid fa-icons"></i>
                                            category
                                        </button></a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="{{url('/managecategory') }}"><button class="nav-link" id="add-category-tab"
                                            data-bs-toggle="tab" data-bs-target="#add-category-tab-pane" type="button"
                                            role="tab">
                                            <i class="fa-solid fa-folder"></i>
                                            Manage category
                                        </button></a>
                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/manageuser') }}"> <button class="nav-link" id="manageuser-tab"
                                            data-bs-toggle="tab" data-bs-target="#manageuser-tab-pane" type="button"
                                            role="tab">
                                            <i class="ri-bank-line"></i> Manage User
                                        </button></a>
                                </li>


                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/manageproduct') }}"> <button class="nav-link"
                                            id="manage-product-tab" data-bs-toggle="tab"
                                            data-bs-target="#manage-product-tab-pane" type="button" role="tab">
                                            <i class="fa-solid fa-box"></i>
                                            Manage Product
                                        </button></a>
                                </li>

                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/customer') }}"> <button class="nav-link" id="customer-tab"
                                            data-bs-toggle="tab" data-bs-target="#customer-tab-pane" type="button"
                                            role="tab">
                                            <i class="fa-solid fa-user"></i>
                                            Customer
                                        </button>
                                    </a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/managesales') }}"> <button class="nav-link" id="manage-sales-tab"
                                            data-bs-toggle="tab" data-bs-target="#manage-sales-tab-pane" type="button"
                                            role="tab">
                                            <i class="fa-solid fa-box"></i>
                                            Manage Sales
                                        </button></a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/sales') }}">
                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="add-sales-tab" data-bs-toggle="tab"
                                        data-bs-target="#add-sales-tab-pane" type="button" role="tab">
                                        <i class="fa-solid fa-tags"></i> Sales

                                    </button>
                                    </a>
                                </li>


                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/orderitem') }}"> <button class="nav-link" id="order-tab"
                                            data-bs-toggle="tab" data-bs-target="#order-tab-pane" type="button"
                                            role="tab">
                                            <i class="ri-file-text-line"></i>My Orders
                                        </button></a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="{{ url('/orderstock') }}"> <button class="nav-link" id="order-tab"
                                            data-bs-toggle="tab" data-bs-target="#order-tab-pane" type="button"
                                            role="tab">
                                            <i class="ri-file-text-line"></i>Order Stock
                                        </button></a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="bank-details-tab" data-bs-toggle="tab"
                                        data-bs-target="#bank-details-tab-pane" type="button" role="tab">
                                        <i class="ri-bank-line"></i> Bank Details
                                    </button>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="wallet-tab" data-bs-toggle="tab"
                                        data-bs-target="#wallet-tab-pane" type="button" role="tab">
                                        <i class="ri-wallet-line"></i> My Wallet
                                    </button>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="earning" data-bs-toggle="tab"
                                        data-bs-target="#earning-tab-pane" type="button" role="tab">
                                        <i class="ri-coin-line"></i> Earning Points
                                    </button>
                                </li>
                                <!-- <li role="presentation" class="nav-item">
                                            <button class="nav-link" id="order-tab" data-bs-toggle="tab"
                                                data-bs-target="#order-tab-pane" type="button" role="tab">
                                                <i class="ri-file-text-line"></i>My Orders
                                            </button>
                                        </li> -->

                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="refund-tab" data-bs-toggle="tab"
                                        data-bs-target="#refund-tab-pane" type="button" role="tab">
                                        <i class="ri-money-dollar-circle-line"></i> Refund History </button>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <button class="nav-link" id="address" data-bs-toggle="tab"
                                        data-bs-target="#address-tab-pane" type="button" role="tab">
                                        <i class="ri-map-pin-line"></i> Saved Address
                                    </button>
                                </li>
                                <li role="presentation" class="nav-item logout-cls">
                                    <a href="#logout" data-bs-toggle="modal" class="btn loagout-btn">
                                        <i class="ri-logout-box-r-line"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <button class="show-btn btn d-lg-none d-block">Show Menu</button>
                    <h3>Product Detail</h3>

                    {{-- <div class="faq-content tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="info-tab-pane" role="tabpanel">
                            <div class="counter-section">
                                <div class="welcome-msg">
                                    <h4>Hello, MARK JECNO !</h4>
                                    <p>From your My Account Dashboard you have the ability to view a snapshot of your
                                        recent account activity and update your account information. Select a link below
                                        to view or edit information.</p>
                                </div> --}}
                                {{-- <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="../assets/images/dashboard/balance.png" alt=""
                                                class="img-fluid">
                                            <div>
                                                <h3>$12.46</h3>
                                                <h5>Total Order</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="../assets/images/dashboard/points.png" alt=""
                                                class="img-fluid">
                                            <div>
                                                <h3>2530</h3>
                                                <h5>Total Points</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="../assets/images/dashboard/order.png" alt=""
                                                class="img-fluid">
                                            <div>
                                                <h3>15</h3>
                                                <h5>Total Orders</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-account box-info">
                                    <div class="box-head">
                                        <h4>Account Information</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="box">
                                                <ul class="box-content">
                                                    <li class="w-100">
                                                        <h6>Full Name: John Due</h6>
                                                    </li>
                                                    <li class="w-100">
                                                        <h6>Phone: +1 65558845</h6>
                                                    </li>
                                                    <li class="w-100">
                                                        <h6>Address: 26, Starts Hollow
                                                            Colony Denver, Colorado, United States 80014</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="box mt-3"> 
                                        <div class="box-head">
                                            <h4>Login Details</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6>Email : john.customer@example.com</h6><a href="#edit-profile"
                                                    data-bs-toggle="modal">Edit</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6>Password : ●●●●●●</h6><a href="#edit-password"
                                                    data-bs-toggle="modal">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="notification-tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-0 mt-0 mb-0">
                                        <div class="card-body">
                                            <div class="top-sec">
                                                <h3>Notifications</h3>
                                            </div>
                                            <ul class="notification-list">
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1013. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 24 Jun 2024
                                                        02:29:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your Refund request status has been rejected</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        05:42:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1012. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        05:18:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1011. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        05:18:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1010. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        04:29:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1009. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:57:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1008 has been updated and
                                                        current order
                                                        status is in delivered. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:49:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1008 has been updated and
                                                        current order
                                                        status is in pending. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:49:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1007 has been updated and
                                                        current order
                                                        status is in delivered. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:49:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1006. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:48:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1005. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:45:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1000 has been updated and
                                                        current order
                                                        status is in delivered. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:34:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1003 has been updated and
                                                        current order
                                                        status is in cancelled. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:34:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1004 has been updated and
                                                        current order
                                                        status is in delivered. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:34:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1004 has been updated and
                                                        current order
                                                        status is in out_for_delivery. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:34:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1004 has been updated and
                                                        current order
                                                        status is in shipped. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:34:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Order Update: Your order #1004 has been updated and
                                                        current order
                                                        status is in processing. Thank you for your patience!</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:34:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1004. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:14:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1003. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:10:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1002. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:07:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1001. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:02:PM</h5>
                                                </li>
                                                <li>
                                                    <h4>Your order has been successfully placed. Order ID:
                                                        #1000. Thank you for
                                                        choosing us.</h4>
                                                    <h5><i class="ri-time-line"></i> 21 Jun 2024
                                                        03:00:PM</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bank-details-tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-0 mt-0">
                                        <div class="card-body">
                                            <div class="top-sec">
                                                <h3>Bank Details</h3>
                                            </div>
                                            <form class="themeform-auth">
                                                <div class="row mb-3 align-items-center">
                                                    <label for="bank_account_no"
                                                        class="form-label col-xxl-2 col-lg-12 col-md-3">Bank Account
                                                        Number</label>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="bank_account_no" class="form-control"
                                                            placeholder="Enter Bank Account Number">
                                                    </div>
                                                </div>
                                                <div class="row mb-3 align-items-center">
                                                    <label for="bank_name"
                                                        class="form-label col-xxl-2 col-lg-12 col-md-3">Bank
                                                        Name</label>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9"><input type="text"
                                                            id="bank_name" class="form-control"
                                                            placeholder="Enter Bank Name">
                                                    </div>
                                                </div>
                                                <div class="row mb-3 align-items-center">
                                                    <label for="bank_holder_name"
                                                        class="form-label col-xxl-2 col-lg-12 col-md-3">Holder
                                                        Name</label>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9"><input type="text"
                                                            id="bank_holder_name" class="form-control"
                                                            placeholder="Enter Bank Holder Name">
                                                    </div>
                                                </div>
                                                <div class="row mb-3 align-items-center">
                                                    <label for="swift"
                                                        class="form-label col-xxl-2 col-lg-12 col-md-3">Swift</label>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="swift" class="form-control"
                                                            placeholder="Enter Swift Code">
                                                    </div>
                                                </div>
                                                <div class="row mb-3 align-items-center">
                                                    <label for="ifsc"
                                                        class="form-label col-xxl-2 col-lg-12 col-md-3">IFSC</label>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="ifsc" class="form-control"
                                                            placeholder="Enter IFSC Code">
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="mb-3 top-sec top-sec-2">
                                                <h3>Payment Details</h3>
                                            </div>
                                            <form class="themeform-auth">
                                                <div class="row mb-3 align-items-center">
                                                    <label for="paypal_email"
                                                        class="form-label col-xxl-2 col-lg-12 col-md-3">Paypal
                                                        Email</label>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="email" id="paypal_email" class="form-control "
                                                            placeholder="Enter Paypal Email">
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button class="btn btn-solid" id="payout_btn" type="submit"> Save
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0 mt-0">
                                    <div class="card-body">
                                        <div class="top-sec">
                                            <form action="{{ route('updatedata', ['id' => $product->id]) }}" name="myForm" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mb-3 align-items-center">
                                                    <div class="col-xxl-2 col-lg-12 col-md-3">
                                                        <label for="productname" class="form-label">Product Name</label>
                                                    </div>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="productname" class="form-control" name="product_name" value="{{$product->product_name}}" placeholder="Enter Product Name">
                                                        <span class="text-danger">
                                                            @error('product_name') {{ $message }} @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mb-3 align-items-center">
                                                    <div class="col-xxl-2 col-lg-12 col-md-3">
                                                        <label for="description" class="form-label">Description</label>
                                                    </div>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="description" class="form-control" name="description"value="{{$product->description}}" placeholder="Enter Description">
                                                        <span class="text-danger">
                                                            @error('description') {{ $message }} @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mb-3 align-items-center">
                                                    <div class="col-xxl-2 col-lg-12 col-md-3">
                                                        <label for="quantity" class="form-label">Quantity</label>
                                                    </div>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="quantity" class="form-control" name="quantity" value="{{$product->quantity}}"placeholder="Enter Quantity">
                                                        <span class="text-danger">
                                                            @error('quantity') {{ $message }} @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mb-3 align-items-center">
                                                    <div class="col-xxl-2 col-lg-12 col-md-3">
                                                        <label for="price" class="form-label">Price</label>
                                                    </div>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="price" class="form-control" name="price" value="{{$product->price}}"placeholder="Enter Price">
                                                        <span class="text-danger">
                                                            @error('price') {{ $message }} @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mb-3 align-items-center">
                                                    <div class="col-xxl-2 col-lg-12 col-md-3">
                                                        <label for="cost" class="form-label">Stock (Cost) Price</label>
                                                    </div>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="text" id="cost" class="form-control" name="cost" value="{{$product->stockprice	}}"placeholder="Enter Cost">
                                                        <span class="text-danger">
                                                            @error('cost') {{ $message }} @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mb-3 align-items-center">
                                                    <div class="col-xxl-2 col-lg-12 col-md-3">
                                                        <label for="image" class="form-label">Upload Image</label>
                                                    </div>
                                                    <div class="col-xxl-10 col-lg-12 col-md-9">
                                                        <input type="file" id="file1" class="form-control" name="file1"value="{{$product->file1}}">
                                                        <span class="text-danger">
                                                            @error('file1') {{ $message }} @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            
                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                            </form>
                                                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="add-product-tab-pane" role="tabpanel">
                        </div>

                        <div class="tab-pane fade" id="wallet-tab-pane" role="tabpanel">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="total-contain wallet-bg">
                                        <div class="wallet-point-box">
                                            <div class="total-image">
                                                <img src="../assets/images/dashboard/balance.png" alt=""
                                                    class="img-fluid">
                                            </div>
                                            <div class="total-detail">
                                                <div class="total-box">
                                                    <h5>Wallet Balance</h5>
                                                    <h3>$8.46</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card mb-0 dashboard-table mt-0">
                                        <div class="card-body">
                                            <div class="total-box mt-0">
                                                <div class="wallet-table">
                                                    <div class="table-responsive">
                                                        <table class="table cart-table">
                                                            <thead>
                                                                <tr class="table-head">
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                    <th>Remark</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>06 Jul 2024
                                                                        03:15:PM</td>
                                                                    <td>$39.40</td>
                                                                    <td>Wallet amount
                                                                        successfully debited for Order #1017</td>
                                                                    <td>
                                                                        <div class="badge bg-debit custom-badge rounded-0">
                                                                            <span>Debit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>25 Jun 2024
                                                                        06:34:PM</td>
                                                                    <td>$375.00</td>
                                                                    <td>Wallet amount
                                                                        successfully debited for Order #1015</td>
                                                                    <td>
                                                                        <div class="badge bg-debit custom-badge rounded-0">
                                                                            <span>Debit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>24 Jun 2024
                                                                        02:29:PM</td>
                                                                    <td>$34.44</td>
                                                                    <td>Wallet amount
                                                                        successfully debited for Order #1013</td>
                                                                    <td>
                                                                        <div class="badge bg-debit custom-badge rounded-0">
                                                                            <span>Debit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>21 Jun 2024
                                                                        04:29:PM</td>
                                                                    <td>$75.21</td>
                                                                    <td>Wallet amount
                                                                        successfully debited for Order #1010</td>
                                                                    <td>
                                                                        <div class="badge bg-debit custom-badge rounded-0">
                                                                            <span>Debit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>21 Jun 2024
                                                                        03:57:PM</td>
                                                                    <td>$30.52</td>
                                                                    <td>Wallet amount
                                                                        successfully debited for Order #1009</td>
                                                                    <td>
                                                                        <div class="badge bg-debit custom-badge rounded-0">
                                                                            <span>Debit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>21 Jun 2024
                                                                        03:48:PM</td>
                                                                    <td>$109.97</td>
                                                                    <td>Wallet amount
                                                                        successfully debited for Order #1006</td>
                                                                    <td>
                                                                        <div class="badge bg-debit custom-badge rounded-0">
                                                                            <span>Debit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>21 Jun 2024
                                                                        03:42:PM</td>
                                                                    <td>$323.00</td>
                                                                    <td>Admin has credited
                                                                        the balance.</td>
                                                                    <td>
                                                                        <div
                                                                            class="badge bg-credit custom-badge rounded-0">
                                                                            <span>Credit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>21 Jun 2024
                                                                        03:41:PM</td>
                                                                    <td>$250.00</td>
                                                                    <td>Admin has debited
                                                                        the balance.</td>
                                                                    <td>
                                                                        <div class="badge bg-debit custom-badge rounded-0">
                                                                            <span>Debit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>21 Jun 2024
                                                                        03:41:PM</td>
                                                                    <td>$500.00</td>
                                                                    <td>Admin has credited
                                                                        the balance.</td>
                                                                    <td>
                                                                        <div
                                                                            class="badge bg-credit custom-badge rounded-0">
                                                                            <span>Credit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>21 Jun 2024
                                                                        03:41:PM</td>
                                                                    <td>$100.00</td>
                                                                    <td>Admin has credited
                                                                        the balance.</td>
                                                                    <td>
                                                                        <div
                                                                            class="badge bg-credit custom-badge rounded-0">
                                                                            <span>Credit</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="product-pagination">
                                                    <div class="theme-paggination-block">
                                                        <nav>
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!"
                                                                        aria-label="Previous">
                                                                        <span>
                                                                            <i class="ri-arrow-left-s-line"></i>
                                                                        </span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a class="page-link" href="#!">1</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!"
                                                                        aria-label="Next">
                                                                        <span>
                                                                            <i class="ri-arrow-right-s-line"></i>
                                                                        </span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="earning-tab-pane" role="tabpanel">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="total-contain wallet-bg">
                                        <div class="wallet-point-box">
                                            <div class="total-image">
                                                <img src="../assets/images/dashboard/points.png" alt=""
                                                    class="img-fluid">
                                            </div>
                                            <div class="total-detail">
                                                <div class="total-box">
                                                    <h5>Total Points</h5>
                                                    <h3>1970</h3>
                                                </div>
                                                <div class="point-ratio">
                                                    <h3 class="counter"><i class="ri-information-line"></i>
                                                        1 Points =
                                                        $0.03 Balance </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="dashboard-table">
                                        <div class="wallet-table">
                                            <div class="table-responsive">
                                                <table class="table cart-table order-table">
                                                    <thead>
                                                        <tr class="table-head">
                                                            <th>Date</th>
                                                            <th>Points</th>
                                                            <th>Remark</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                            <td>06 Jul 2024 03:15:PM</td>
                                                            <td>$39.40</td>
                                                            <td>Wallet amount successfully debited for Order #1017</td>
                                                            <td>
                                                                <div class="badge bg-debit custom-badge rounded-0">
                                                                    <span>Debit</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>25 Jun 2024 06:34:PM</td>
                                                            <td>$375.00</td>
                                                            <td>Wallet amount successfully debited for Order #1015</td>
                                                            <td>
                                                                <div class="badge bg-debit custom-badge rounded-0">
                                                                    <span>Debit</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>24 Jun 2024 02:29:PM</td>
                                                            <td>$34.44</td>
                                                            <td>Wallet amount successfully debited for Order #1013</td>
                                                            <td>
                                                                <div class="badge bg-debit custom-badge rounded-0">
                                                                    <span>Debit</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21 Jun 2024 04:29:PM</td>
                                                            <td>$75.21</td>
                                                            <td>Wallet amount successfully debited for Order #1010</td>
                                                            <td>
                                                                <div class="badge bg-debit custom-badge rounded-0">
                                                                    <span>Debit</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21 Jun 2024 03:57:PM</td>
                                                            <td>$30.52</td>
                                                            <td>Wallet amount successfully debited for Order #1009</td>
                                                            <td>
                                                                <div class="badge bg-debit custom-badge rounded-0">
                                                                    <span>Debit</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21 Jun 2024 03:41:PM</td>
                                                            <td>$500.00</td>
                                                            <td>Admin has credited the balance.</td>
                                                            <td>
                                                                <div class="badge bg-credit custom-badge rounded-0">
                                                                    <span>Credit</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <nav>
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#!" aria-label="Previous">
                                                            <span>
                                                                <i class="ri-arrow-left-s-line"></i>
                                                            </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#!">1</a>
                                                    </li>

                                                    <li class="page-item">
                                                        <a class="page-link" href="#!" aria-label="Next">
                                                            <span>
                                                                <i class="ri-arrow-right-s-line"></i>
                                                            </span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="order-tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="card mb-0 dashboard-table mt-0">
                                    <div class="card-body">
                                        <div class="top-sec">
                                            <h3>My Orders</h3>
                                        </div>
                                        <div class="total-box mt-0">
                                            <div class="wallet-table mt-0">
                                                <div class="table-responsive">
                                                    <table class="table cart-table order-table">
                                                        <thead>
                                                            <tr class="table-head">
                                                                <th>Order Number</th>
                                                                <th>Date</th>
                                                                <th>Amount</th>
                                                                <th>Payment Status</th>
                                                                <th>Payment Method</th>
                                                                <th>Option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1020</span></td>
                                                                <td>06 Jul 2024 03:51:PM
                                                                </td>
                                                                <td>$61.73</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1017</span></td>
                                                                <td>06 Jul 2024 03:15:PM
                                                                </td>
                                                                <td>$1.97</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1016</span></td>
                                                                <td>26 Jun 2024 10:23:AM
                                                                </td>
                                                                <td>$46.14</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1015</span></td>
                                                                <td>25 Jun 2024 06:34:PM
                                                                </td>
                                                                <td>$18.75</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1013</span></td>
                                                                <td>24 Jun 2024 02:29:PM
                                                                </td>
                                                                <td>$1.72</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1012</span></td>
                                                                <td>21 Jun 2024 05:18:PM
                                                                </td>
                                                                <td>$6.23</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1011</span></td>
                                                                <td>21 Jun 2024 05:18:PM
                                                                </td>
                                                                <td>$39.72</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1010</span></td>
                                                                <td>21 Jun 2024 04:29:PM
                                                                </td>
                                                                <td>$3.76</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1009</span></td>
                                                                <td>21 Jun 2024 03:57:PM
                                                                </td>
                                                                <td>$1.52</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="fw-bolder">#1006</span></td>
                                                                <td>21 Jun 2024 03:48:PM
                                                                </td>
                                                                <td>$5.49</td>
                                                                <td>
                                                                    <div class="badge bg-pending custom-badge rounded-0">
                                                                        <span>Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>COD</td>
                                                                <td><a href="#!"><i class="ri-eye-line"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="product-pagination">
                                                <div class="theme-paggination-block">
                                                    <nav>
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#!"
                                                                    aria-label="Previous">
                                                                    <span>
                                                                        <i class="ri-arrow-left-s-line"></i>
                                                                    </span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a class="page-link" href="#!">1</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#!">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#!">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#!" aria-label="Next">
                                                                    <span>
                                                                        <i class="ri-arrow-right-s-line"></i>
                                                                    </span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="refund-tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-0 dashboard-table mt-0">
                                        <div class="card-body">
                                            <div class="top-sec">
                                                <h3>Refund</h3>
                                            </div>
                                            <div class="total-box mt-0">
                                                <div class="wallet-table mt-0">
                                                    <div class="table-responsive">
                                                        <table class="table cart-table order-table">
                                                            <thead>
                                                                <tr class="table-head">
                                                                    <th>Order</th>
                                                                    <th>Status</th>
                                                                    <th class="reason-table">Reason</th>
                                                                    <th>Created At</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><span class="fw-bolder">#1000</span></td>
                                                                    <td>
                                                                        <div class="status-rejected">
                                                                            <span>Rejected</span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="reason-table">Item was damaged . also
                                                                        fabric was not
                                                                        good as expected</td>
                                                                    <td>21 Jun 2024</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="product-pagination">
                                                    <div class="theme-paggination-block">
                                                        <nav>
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!"
                                                                        aria-label="Previous">
                                                                        <span>
                                                                            <i class="ri-arrow-left-s-line"></i>
                                                                        </span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a class="page-link" href="#!">1</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#!"
                                                                        aria-label="Next">
                                                                        <span>
                                                                            <i class="ri-arrow-right-s-line"></i>
                                                                        </span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address-tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-0 mt-0">
                                        <div class="card-body">
                                            <div class="top-sec">
                                                <h3>Address Book</h3><a href="#add-address" data-bs-toggle="modal"
                                                    class="btn btn-sm btn-solid">+ Add New</a>
                                            </div>
                                            <div class="address-book-section">
                                                <div class="row g-4">
                                                    <div class="select-box active col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="top">
                                                                <h6>John Due <span>New Home</span>
                                                                </h6>
                                                            </div>
                                                            <div class="middle">
                                                                <div class="address">
                                                                    <p>26, Starts Hollow
                                                                        Colony, Denver</p>
                                                                    <p>Colorado, United
                                                                        States</p>
                                                                    <p>80014</p>
                                                                </div>
                                                                <div class="number">
                                                                    <p>Phone: <span>+1
                                                                            5551855359</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom"><a href="#edit-address"
                                                                    data-bs-toggle="modal" class="bottom_btn">Edit</a><a
                                                                    href="#delate-address" data-bs-toggle="modal"
                                                                    class="bottom_btn">Remove</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="select-box active col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="top">
                                                                <h6>John Due <span>Old Home</span>
                                                                </h6>
                                                            </div>
                                                            <div class="middle">
                                                                <div class="address">
                                                                    <p>53B, Claire New
                                                                        Street, San Jose</p>
                                                                    <p>Colorado, United States</p>
                                                                    <p>94088</p>
                                                                </div>
                                                                <div class="number">
                                                                    <p>Phone: <span>+1
                                                                            5551855359</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom"><a href="#edit-address"
                                                                    data-bs-toggle="modal" class="bottom_btn">Edit</a><a
                                                                    href="#delate-address" data-bs-toggle="modal"
                                                                    class="bottom_btn">Remove</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="select-box active col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="top">
                                                                <h6>John Due <span>Office</span></h6>
                                                            </div>
                                                            <div class="middle">
                                                                <div class="address">
                                                                    <p>21B, Row New Street,
                                                                        San Jose</p>
                                                                    <p>California, United
                                                                        States</p>
                                                                    <p>94088</p>
                                                                </div>
                                                                <div class="number">
                                                                    <p>Phone: <span>+1
                                                                            551865359</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom"><a href="#edit-address"
                                                                    data-bs-toggle="modal" class="bottom_btn">Edit</a><a
                                                                    href="#delate-address" data-bs-toggle="modal"
                                                                    class="bottom_btn">Remove</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
