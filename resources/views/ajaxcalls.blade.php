
<script>
	function send_data()
    {   
    	alert("hii");
        var name=document.getElementById('name').value;
        var email=document.getElementById('mail').value;
        var message=document.getElementById('message').value;
        var contact=document.getElementById('subject').value;
    	
    	$.post('/send', {
    	_token: $('meta[name=csrf-token1]').attr('content'),
    	mail:email,
    	name:name,
    	subject:contact,
    	message:message
    	}
    	)
    	.done(function(data) {
    	alert("success");

    	})
    	.fail(function(error) {
    	alert( JSON.stringify(error) );
    	});
    	}
</script>
