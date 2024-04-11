Feature: delete publication
  In order to remove irrelevant publications
  As an administrator
  I need to be able to delete publication

  Scenario: Administrator deletes a publication
    Given I am logged in as an administrator
    When I navigate to the publication to be deleted
    And I select the option to delete the publication
    Then the publication should be successfully deleted from the platform
