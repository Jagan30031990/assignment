<script src="https://code.jquery.com/jquery-3.6.1.js" ></script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/script-new.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets/js/custom/apps/projects/list/list.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/ecommerce/catalog/categories.js')}}"></script>
<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets/js/custom/authentication/sign-up/general.js')}}"></script>
<!--end::Page Custom Javascript-->

<script src="{{asset('assets/js/custom/documentation/general/datatables/subtable.js')}}"></script>

 <script src="{{asset('assets/js/custom/documentation/forms/daterangepicker.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--toaster js -->
 <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="assets/js/custom/account/settings/signin-methods.js"></script>
 <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 <!--toaster js end-->
 
 <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>


		


<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-pageLoadMore/1.0.2/js/dataTables.pageLoadMore.min.js"></script>


<script>
   function myF(){
    new Tagify(document.querySelector('[data-kt-repeater="tagify"]'), {
			whitelist: ["Important", "Urgent", "High", "Medium", "Low"],
			maxTags: 5,
			dropdown: {
				maxItems: 10,           // <- mixumum allowed rendered suggestions
				enabled: 1,             // <- show suggestions on focus
				closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
			}
		});
    
   }
   myF();
</script>