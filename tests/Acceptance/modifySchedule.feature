Feature: Modify Schedule
In order to accommodate changes in schedules
As an admin
I need to be able to modify the schedule

Scenario: Modify Schedule
Given I am logged in as an administrator
When I navigate to "/Admin/schedule"
Then I should be able to access the entire schedule
When I select a time slot to modify
Then I should be able to edit details such as the date or time 
And I should be able to update the schedule accordingly
When I save the changes
Then the schedule should be modified as per the updated details
