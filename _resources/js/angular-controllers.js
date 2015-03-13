function gtiController($scope) {
	$scope.currentYear = new Date().getFullYear();
	$scope.contactInfo = {
		phone: {
			office: '(408) 839-2203',		// *******
			fax: '(408) 741-5444',			// *******
			mobile: '(408) 839-2203'		// *******
		},
		email: 'info@guerra-tech.com',		// *******
		address: {
			mailing: {
				street: '5205 Prospect Road, #135-157',
				city: 'San Jose',
				state: 'CA',
				zip: '95129'
			},
			physical: {
				street: '1650 Zanker Road, Suite 240',
				city: 'San Jose',
				state: 'CA',
				zip: '95112'
			}
		}
	};
}