driver = Selenium::WebDriver.for :firefox

Given(/^user is on the first step of the application page$/) do
  driver.navigate.to("localhost:8000/apply")
end
When(/^the user fills out all the required fields on all the steps$/) do
  driver.find_element(:id, "profile_image").send_keys("/home/kevin/Pictures/random.jpg")
  driver.find_element(:id, "first_name").send_keys("Orange")
  driver.find_element(:id, "last_name").send_keys("Octopus")

  seed = Random.new_seed
  num = srand seed
  email = "OrangeOcto"+num.to_s+"@ocean.com"
  driver.find_element(:id, "email").send_keys(email)
  driver.find_element(:id, "phone").send_keys("1234567890")

  #increase wait time
  driver.manage.timeouts.implicit_wait = 10

  country_select = driver.find_element(:id, "country")
  country_select.click
  country_option = country_select.find_elements(:tag_name, 'option')
  country_option.each { |option| option.click if option.text == 'United States'}


  state_select = driver.find_element(:id, "state")
  state_select.click
  country_option = state_select.find_elements(:tag_name, 'option')
  country_option.each { |option| option.click if option.text == 'Colorado'}

  driver.find_element(:id, "city").send_keys("Nowhere")
  driver.find_element(:id, "zip").send_keys("78903")
  driver.find_element(:id, "dob").send_keys("2/2/1997")

  gender_select = driver.find_element(:id, "gender")
  gender_select.click
  gender_option = Selenium::WebDriver::Support::Select.new(gender_select)
  gender_option.select_by(:text, 'Male')

  #Go to second page
  driver.find_element(:class, 'next-button').click
  driver.find_element(:class, 'next-button').click #somehow we need two clicks for this to work

  #wait longer
  driver.manage.timeouts.implicit_wait = 15
  industry_select = driver.find_element(:id, "talent_category")
  industry_select.click
  industry_option = country_select.find_elements(:tag_name, 'option')
  industry_option.each { |option| option.click if option.text == 'Music'}

  driver.find_element(:id, "specific_talent").send_keys("Crazy Jazz Hands")
  driver.find_element(:id, "link1").send_keys("blah.com")
  driver.find_element(:class, "removeRow").click

  #Go to third page
  driver.find_element(:id, 'app2-next').click

  driver.find_element(:id, 'additional').send_keys("no additional requests")

  #Go to fourth page
  driver.find_element(:id, 'app3-next').click

  driver.find_element(:id, 'aboutme').send_keys("I don't know")
  driver.find_element(:id, 'exp').send_keys("Walking")
  driver.find_element(:class, 'addlink-button').click
  driver.find_element(:class, 'removelink-button').click




end

When(/^the user presses submit$/) do
  
end

Then(/^the page should redirect to the thank\-you page$/) do
  pending # Write code here that turns the phrase above into concrete actions
end
