var chosenMembership = [];

$(document).ready(function() {
    // get page2
    var page2_div = $('.page2');
    page2_div.hide();

    // a div for the next button
    var buttonDiv = $('<div>').addClass('next-btn-div');
    
    //next button
    var nextBtn = $("<a>").text('Next').hide();
    nextBtn.addClass('nextButton'); // add the 'nextButton' class

    // append the "next" button inside the div
    buttonDiv.append(nextBtn);
    
    // append the div to the content section
    $('.content').append(buttonDiv);

    /* ------------------------------------------- */
    //confirm button
    

    // set up click event handler for the "Next" button
    nextBtn.click(function() {
        $('.page1').hide();
        page2_div.show();
        nextBtn.hide();
    });

    // get back button
    var backBtn = $('.back-btn');

    backBtn.click(function() {
        page2_div.hide();
        $('.card').css('background-color', '');
        $('.page1').show();
    });

    chooseMembership(nextBtn);
    // confirmation();
});

function chooseMembership(nextBtn) {
    var page2_div = $('.page2');

    // Find the element with the class "subtitle" inside the page2 section
    var subtitle_p2 = page2_div.find('.subtitle');
    var price_p2 = page2_div.find('.price');
    var desc_p2 = page2_div.find('.desc2');

    $('.card').click(function() {
        var subtitle = $(this).find('.subtitle').text();
        var price = $(this).find('.price').text();
        var desc = $(this).find('.desc').text();

        if (chosenMembership[0] == subtitle) {
            chosenMembership = []; //clear the array
            $('.card').css('background-color', ''); //clear the background color of the card
            subtitle_p2.empty();
            price_p2.empty();
            desc_p2.empty();
            console.log(chosenMembership);
            nextBtn.hide();
            return;
        }

        chosenMembership = []; //clear the array
        $('.card').css('background-color', ''); //clear the background color of the card
        $(this).css('background-color', '#ffda76');

        chosenMembership.push(subtitle.trim());
        chosenMembership.push(price.trim());
        chosenMembership.push(desc.trim());

        // Update the visibility of the "Next" button
        if(chosenMembership.length > 0) {
            nextBtn.show();
        } else {
            nextBtn.hide();
        }

        confirmation();

        console.log(chosenMembership);
    });
}

function confirmation() {
    // get the page2 section using its class
    var page2_div = $('.page2');
    
    // Find the element with the class "subtitle" inside the page2 section
    var subtitle = page2_div.find('.subtitle');
    var price = page2_div.find('.price');
    var desc = page2_div.find('.desc2');

    subtitle.empty();
    price.empty();
    desc.empty();

    // Set the text of the found subtitle element to the first item of chosenMembership array
    subtitle.append($('<p>').text('Membership type: ').css('font-weight', 'bold'));
    subtitle.append($('<input>').attr('class', 'membership_type').attr('type', 'text').attr('name', 'membership_type').attr('readonly', 'true').val(chosenMembership[0]));

    price.append($('<p>').text('Price: ').css('font-weight', 'bold'));
    price.append($('<p>').text(chosenMembership[1]));

    desc.append($('<p>').text('What\'s included: ').css('font-weight', 'bold'));
    desc.append($('<p>').text(chosenMembership[2]));

}