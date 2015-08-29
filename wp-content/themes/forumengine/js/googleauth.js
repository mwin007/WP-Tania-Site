(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/client:plusone.js?onload=gplus_render';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

/* Executed when the APIs finish loading */
function gplus_render() {

	// Additional params including the callback, the rest of the params will
	// come from the page-level configuration.
	var additionalParams = {
		'callback': signinCallback,
		'clientid': fe_globals.gplus_client_id,
		'cookiepolicy': 'single_host_origin',
		'requestvisibleactions': 'http://schema.org/AddAction',
		'scope': 'https://www.googleapis.com/auth/plus.login'		
	};

	// Attach a click listener to a button to trigger the flow.
	if(currentUser.ID == 0){
		var signinButton = document.getElementById('signinButton');
		signinButton.addEventListener('click', function() {
			gapi.auth.signIn(additionalParams); // Will use page level configuration
		});
	}
}

function signinCallback(authResult) {
	//console.log(authResult);
	if (authResult['g-oauth-window']) {
		gapi.client.load('oauth2', 'v2', function()
		{
			gapi.client.oauth2.userinfo.get()
				.execute(function(response)
				{
				// Shows user email
				//console.log(response);
				var params = {
					url 	: fe_globals.ajaxURL,
					type 	: 'post',
					data 	: {
						action: 'et_google_auth',
						content: response
					},
					beforeSend: function(){
					},
					success: function(resp){
						if ( resp.success && typeof resp.data.redirect_url != 'undefined' ){
							window.location = resp.data.redirect_url;
						}
						else if ( resp.success && typeof resp.data.user != 'undefined' ){
							// assign current user
							var model = new ForumEngine.Models.User(resp.data.user);
							ForumEngine.app.currentUser = model;

							// trigger events
							var view 	= ForumEngine.app.loginModal;
							view.trigger('response:login', resp);
							pubsub.trigger('fe:response:login', model);
							pubsub.trigger('fe:showNotice', resp.msg , 'success');

							view.$el.on('hidden.bs.modal', function(){
								pubsub.trigger('fe:auth:afterLogin', model);
								view.trigger('afterLogin', model);

								if ( view.options.enableRefresh == true){
									window.location.reload(true);
								} else {
								}
							});	

							view.close();

							//window.location = resp.data.redirect_url;
						} else if ( resp.msg ) {
							pubsub.trigger('fe:showNotice', resp.msg , 'error');
						}
					},
					complete: function(){
						//$('#facebook_auth_btn').loader('unload');
					}
				}
				$.ajax(params);  				
			});
		});		

	} else {
		//console.log('Sign-in state: ' + authResult['error']);
	}
}