
<script>
	function subscribe()
    {   
        
        var email=document.getElementById('email').value;
       
    	$.post('/subscribe', {
    	_token: $('meta[name=csrf-token1]').attr('content'),
    	email:email
    	
    	}
    	)
    	.done(function(data) {
    	alert("success");

    	})
    	.fail(function() {
    	alert( "error" );
    	});
    	}
</script>