Feature: 
In order to perfom tests
As a generic user of the app
I want to see data be initalised in the database

Scenario: Populate tables
 When I add "Winter camp" in the database camps
 Then I see "Winter camp" in the database camps
 And I see "VIP", "Basic" and "Premium" in the database memberships
 Then I see "half court", "full court" and "basket" in the database booking type
