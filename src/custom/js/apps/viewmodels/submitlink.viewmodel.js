// JavaScript Document
Core.ViewModel.SubmitLink = function() {
	var _self = this;
	_self.title = ko.observable('');
	_self.category = ko.observable('');
	_self.httplink = ko.observable('');
	
	_self.submitLink = function(target, callback) {		
			callback = typeof (callback) == "function" ? callback : _self._submitArticleCallback;
			// begin
			var Info = {
				ACTION: 'submitlink',
				SESSION: $.cookie('PHPSESSID'),
				JSON: ko.toJSON({
								userid: $.cookie('user_id'),
								passcode: $.cookie('passcode'),
								ipaddress: $.cookie('ipaddress'),
								title: _self.title(),
								category: _self.category(),
								httplink: _self.httplink()})
			};
	
			$.ajax({
				url: '../../json/submitlink.json.php',
				data: Info,
				dataType: 'json',
				type: "post",
				success: callback
			});
		};
		
	_self._submitArticleCallback = function(data) {
			if (data[0].logout == '1') { window.location = "logout.view.php" }
			if (data[0].success == '1') {
				window.location = "message.view.php?message=Successfully submitted link for review.";
			} else {
				window.location = "message.view.php?message=An error occured while trying to submit this link.";
			}
		};		
};

