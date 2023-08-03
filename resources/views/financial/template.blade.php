@extends('auth.dashboard')

@section('header-element')
    <div class="flex justify-between items-center h-full">
    <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
        <a href="{{ route('admin.menu.dashboard') }}" class="mobile-logo xl:hidden inline-block">
            <img src="{{ url('/assets/images/logo/favicon.svg') }}" alt="logo">
        </a>

    </div>
    <!-- end vertcial -->
    <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
        <a href="{{ route('admin.menu.dashboard') }}">
            <span class="xl:inline-block hidden">
                <img src="{{ url('assets/images/logo/logo.svg') }}" alt="logo">
            </span>
            <span class="xl:hidden inline-block">
                <img src="{{ url('/assets/images/logo/favicon.svg') }}" alt="logo">
            </span>
        </a>

    </div>
     <div class="main-menu">
                                <ul>
                                    <li clss="{{(request()->is('financial/dashboard')) ? 'active' : '' }} menuatas">
                                        <a href="{{ route('financial.menu.dashboard') }}" class="Navbar">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                               <span class="icon-box text-box">
                                                    <iconify-icon icon=heroicons-outline:home> </iconify-icon>
                                                </span>
                                               <div class="text-box">Home</div>
                                            </div>
                                        </a>
                                   </li>
                                    
                                    <li class="{{(request()->is('financial/rekap')) ? 'active' : '' }} menuatas">
                                        <a href="{{ route('financial.menu.rekap') }}" class="Navbar">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box text-box">
                                                    <iconify-icon icon=pajamas:review-list>
                                                    </iconify-icon>
                                                </span>
                                                <div class="text-box">Rekap Keuangan</div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

    <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
        <!-- Theme Changer -->
        <!-- BEGIN: Toggle Theme -->
        <div class=" w-full">
            <button id="themeMood" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
            </button>
        </div>
        <!-- END: Toggle Theme -->
        <!-- Profile DropDown Area -->
        <div class=" w-full">
            <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                    <img src="{{ Auth::guard('webfinance')->user()->foto_profil ? Auth::guard('webfinance')->user()->foto_profil : url('assets/images/avatar/av-1.svg') }}" alt="user" class="block w-full h-full object-cover rounded-full">
                </div>
                <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">{{ Auth::guard('webfinance')->user()->nama }}</span>
                <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]" aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div class="dropdown-menu z-100 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md overflow-hidden">
                <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                    <li>
                        <a href="{{ route('financial.profile') }}" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                            <iconify-icon icon="heroicons-outline:user" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                            <span class="font-Inter">Profil</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Header -->
        <!-- end mobile menu -->
    </div>
    <!-- end nav tools -->
</div>
@endsection

@section('content')
<div class="content-wrapper transition-all duration-150" id="content_wrapper" >
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">
                <!-- BEGIN: Breadcrumb -->
                <div class="mb-5">
                    <ul class="m-0 p-0 list-none">
                        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                            <a href="{{ route('admin.menu.dashboard') }}">
                                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                            </a>
                        </li>
                        @foreach(explode('.', Route::current()->getName()) as $name)
                        <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                            {{ $name }}
                        </li>
                        @endforeach

                    </ul>
                </div>
                <!-- END: BreadCrumb -->
                <div class=" space-y-5">
                    @yield('main-content')
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('menu-mobile')
<div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
    <a href="{{route('financial.menu.dashboard')}}">
        <div class="{{ (request()->is('financial/dashboard')) ? 'active' : '' }} menubawah">
            <span class="textcol relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
            </span>
            <span class="textcol block text-[11px] text-slate-600 dark:text-slate-300">
                Home
            </span>
        </div>
    </a>    
<a href="{{route('financial.menu.rekap')}}">
        <div class="{{ (request()->is('financial/rekap*')) ? 'active' : '' }} menubawah">
            <span class="textcol relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
                <iconify-icon icon="pajamas:review-list"></iconify-icon>
            </span>
            <span class="textcol block text-[11px] text-slate-600 dark:text-slate-300">
                Rekap Pesanan
            </span>
        </div>
    </a>
</div>
</div>
@endsection
@section('custom-script')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script>
    	function getPDF(){

		var HTML_Width = $(".canvas_div_pdf").width();
		var HTML_Height = $(".canvas_div_pdf").height();
		var top_left_margin = 15;
		var PDF_Width = HTML_Width+(top_left_margin*2);
		var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
		var canvas_image_width = HTML_Width;
		var canvas_image_height = HTML_Height;
		
		var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
		

		html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
			canvas.getContext('2d');
			
			console.log(canvas.height+"  "+canvas.width);
			
			
			var imgData = canvas.toDataURL("image/jpeg", 1.0);
			var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
		    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
			
			
			for (var i = 1; i <= totalPDFPages; i++) { 
				pdf.addPage(PDF_Width, PDF_Height);
				pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
			}
			var tanggal= tw.getDate ();
		    pdf.save("Rekap Keuangan dicetak oleh : {{ Auth::guard('webfinance')->user()->nama }}.pdf");
        });
	};
</script>
<script>
    function printdiv(elem) {
  var header_str = '<html><head><title>' + document.title  + '</title></head><body>';
  var footer_str = '</body></html>';
  var new_str = document.getElementById(elem).innerHTML;
  var old_str = document.body.innerHTML;
  document.body.innerHTML =  new_str ;
  window.print();
  document.body.innerHTML = old_str;
  return false;
}
</script>
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>

@endsection