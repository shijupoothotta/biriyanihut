<!-- Hide Submit button on refresh --> 
$('form').submit(function() {
	$('.btn').attr('disabled', true).addClass('disabled');
});
<!-- // Hide Submit button on refresh --> 

<!-- Delete Modal --> 
$(document).ready(function() { 
	$('.confirmClick').live('click',function() {
		var q = 'Are you sure you want to do this action?';
		var t = $(this).attr('title');
		if (t.length > 0) q = 'Are you sure you want to ' + t.toUpperCase() + '?';
		var c = confirm(q);
		return c;
	});
});
<!-- // Delete Modal -->  

<!-- Toggle Table Sorting icon -->
$('th').click(function() {
	var th_index = $(this).index();
	$("th:not('.eq(th_index)')").children('i').attr( 'class', 'pull-right icon-chevron-down' );
	$('th').eq(th_index).children('i').toggleClass("icon-chevron-up icon-chevron-down");
});

<!-- // Toggle Table Sorting icon -->  

function set_home_about(base_url,pid)
{
		$.post(base_url+'adminabout/set_home_about',{id:pid}, function(data) {

		});
}

function set_special(base_url,pid)
{
	var status;
		if($('.checkbox'+pid).is(':checked'))
			status=1;
		else
			status=0;
		$.post(base_url+'adminproduct/set_special',{id:pid,status:status}, function(data) {

		});
}

/*

$(".optionsRadios").click(function(){
	alert("<?php echo site_url('admin');?>");
})

<!-- Coupon Transfer --> 
function check_coupon_transfer(base_url)
{

	$.post(base_url + 'admincoupon/check_coupon_transfer',{from:$('#from').val(),to:$('#to').val(),coupon_type:$('#coupon_type').val(),franchisee_id:$('#franchisee_id').val()}, function(data) {
			var obj = jQuery.parseJSON(data);
			$(".modal-body #range").html($('#from').val()+' to '+$('#to').val());
			$(".modal-body #franchisee").html(obj['franchisee'].c_branch_name);
			$(".modal-body #used").html(obj['stat'].used);
			$(".modal-body #unused").html(obj['stat'].unused);
			var t=obj['stat'].unused - obj['stat'].used;
			if(t<0) t=0;
			$(".modal-body #transferable").html(t);
			$('#myModal').modal();

	});
}

function confirm_transfer(base_url)
{
	
	$.post(base_url + 'admincoupon/confirm_transfer',{from:$('#from').val(),to:$('#to').val(),coupon_type:$('#coupon_type').val(),franchisee_id:$('#franchisee_id').val()}, function(data) {
			
		$('#myModal').modal('hide');
		window.location.replace(base_url+'admincoupon');
	});
}

function delete_data(base_url,pid,ptitle)
{
	$.post(base_url,{id:pid}, function(data) {
			$(".modal-body #transferable").html(ptitle);
	});
}
<!-- // Coupon Transfer --> */