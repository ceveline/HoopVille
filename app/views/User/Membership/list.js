var chosenMembership = [];

$(document).ready(function() {
    // Create a div for the next button
    var buttonDiv = $('<div>').addClass('next-btn-div');
    
    // Create the "Next" button anchor element
    var clearSelectionButton = $("<a>").text('Next').hide();
    clearSelectionButton.addClass('nextButton'); // Add the 'nextButton' class

    // Append the "Next" button inside the div
    buttonDiv.append(clearSelectionButton);
    
    // Append the div to the content section
    $('.content').append(buttonDiv);

    // Set up click event handler for the "Next" button
    clearSelectionButton.click(function() {
        $('.page1').hide();
    });

    chooseMembership(clearSelectionButton);
});

function chooseMembership(clearSelectionButton) {
    $('.card').click(function() {
        var subtitle = $(this).find('.subtitle').text();
        var price = $(this).find('.price').text();

        if (chosenMembership[0] == subtitle) {
            chosenMembership = []; //clear the array
            $('.card').css('background-color', ''); //clear the background color of the card
            console.log(chosenMembership);
            clearSelectionButton.hide();
            return;
        }

        chosenMembership = []; //clear the array
        $('.card').css('background-color', ''); //clear the background color of the card
        $(this).css('background-color', '#ffda76');

        chosenMembership.push(subtitle);
        chosenMembership.push(price);

        // Update the visibility of the "Next" button
        if(chosenMembership.length > 0) {
            clearSelectionButton.show();
        } else {
            clearSelectionButton.hide();
        }

        console.log(chosenMembership);
    });
}
