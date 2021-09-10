@component('mail::message')

<h4 style="font-family: Cairo; color: white">اهلاً {{ucfirst($user)}} لقد قمت بالأشتراك في الخدمة بنجاح و ميعاد تجديد باقتك هو يوم {{$date}}. نتمني لك مشاهدة ممتعة.</h4>


<h6>لتغيير باقتك او الغاء الاشترك :</h6>
<div class="text-center" style="text-align: center;">
    <a href="{{route("settings")}}" class="button button-primary" target="_blank" rel="noopener" style="font-family: Cairo;"> تحكم في الباقة</a>
</div>

 <h5>شكرا <br>   {{config("app.name")}}</h5>

@endcomponent
