Feature: Application form submission

	When you fill out all the required fields in the form, the user can submit.

	Scenario: Successful submission
		Given user is on the first step of the application page
		When the user fills out all the required fields on all the steps
		And the user presses submit
		Then the page should redirect to the thank-you page