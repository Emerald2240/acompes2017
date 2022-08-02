setLoader();
$(window).on('load', function () {
    removeLoader();
});













//new WOW().init();

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: "en"
    }, 'google_translate_element');
}

function changeLanguageByButtonClick() {
    var language = document.getElementById("language").value;
    //var language = language.options[ language.selectedIndex ].value 
    console.log(language);
    language = 'ar';
    var selectField = document.querySelector("#google_translate_element select");
    //var selectField = $('#google_translate_element select')

    console.log('mann!')
    for (var i = 0; i < selectField.children.length; i++) {
        console.log('inside loop');
        var option = selectField.children[i];
        // find desired langauge and change the former language of the hidden selection-field 
        if (option.value == language) {
            console.log('setting language');
            selectField.selectedIndex = i;
            // trigger change event afterwards to make google-lib translate this side
            selectField.dispatchEvent(new Event('change'));
            break;
        }
    }
    console.log('outside loop');
}











var currentPageHash = window.location.hash;

setInterval(function () {
    if (window.location.hash != currentPageHash) {
        console.log('current page hash is: ' + currentPageHash);
        console.log('window hash is: ' + window.location.hash);
        //window.alert('loading a new page in the set interval function. window hash: '+window.location.hash+' current hash: '+currentPageHash);
        loadNewPage("functions/ajax.php", { "page": window.location.hash }, true);
        currentPageHash = window.location.hash;
    }
}, 100);

function removeLoader() {
    // $(".loader").animate({ opacity: '0.2' });
    // setTimeout(() => {
    //     $('.loader').removeAttr('style');
    // }, 500);

    //$(".preloader").animate({ opacity: '0.2' }, 1500);
    /////////////////////////////////////////////////////////////////////$('.preloader').fadeOut(500, 'linear')
    //$('.preloader').attr('style', 'display:none');


    // setTimeout(() => {
    //     //console.log('setting up timeout');
    //     //$('.preloader').removeAttr('style');
    //     //$('.preloader').attr('style', 'display:none');

    // }, 500);






    // 3. Page load completes - the text "hello",
    // has come to center with zoom 800%
    $(".preloader").animate({
        //zoom: "1000%",
        top: window.innerHeight,
        opacity: 0
    }, 500, function () {
        // $(this).delay(3000)
        $(this).fadeOut()

    })

}

function setLoader() {
    // // $('.loader').attr('style', 'display:block');
    // // setTimeout(() => {
    // $('.loader').show();
    // $(".loader").animate({ opacity: '1' });
    // // }, 1000);


    // $('.loader').attr('style', 'display:block');
    // setTimeout(() => {
    $('.preloader').addClass('preloader_animation');
    $(".preloader").animate({ opacity: '1' });


    // }, 1000);



    // $(window).load(function () {
    //     $('.preloader').fadeOut('slow');
    // });

}

function removeLoaderExperimental() {
    // 3. Page load completes - the text "hello",
    // has come to center with zoom 800%
    $(".preloader").animate({
        zoom: "800%",
        left: window.innerWidth / 2
    }, 3000, function () {
        // 4. Pause for 3 seconds
        $(this).delay(3000)
            // 6. zooms out to 200% heading towards left top corner,
            // (logo position) 
            // 7. Fades out when reaching the logo 8. Logo appears
            .animate({
                zoom: "200%",
                left: 0
            }, 3000, function () {
                $(this).fadeOut()
            })
    })
}

function simpleAjaxPostRequest(url, dataRequest) {
    setLoader();
    $.post(url,   // url
        dataRequest,//{ myData: 'This is my data.' }, // data to be submit
        function (data, status, jqXHR) {// success callback
            //$('#ajax_result').value = ('status: ' + status + ', data: ' + data + '<br>');
            //var dataParsed = JSON.parse(data);
            console.log(data);
            return data;
            //removeLoader();
        })
}

function simpleAsyncSearch(url, inputId) {
    inputId = document.getElementById(inputId);
    $.ajax({
        type: "POST",
        url: url,
        data: 'keyword=' + $(inputId).val(),
        beforeSend: function () {
            setSearchBarLoader('line');
        },
        success: function (data) {
            console.log(data);
            $("#student_list").show();
            $("#student_list").html(data);
            removeSearchBarLoader('line');
        }
    });
}

function doIt(url, dataRequest) {
    console.log(simpleAjaxPostRequest(url, dataRequest));
}

function loadNewPage(url, dataRequest, dontTouchHash = null) {
    //console.log('new page hash is: ' + newPageHash);
    console.log('current page hash is: ' + currentPageHash);
    console.log('window hash is: ' + window.location.hash);
    //dataRequest = JSON.parse(dataRequest);
    setLoader();
    //linkId = document.getElementById(linkId);
    //console.log(dataRequest);
    $.post(url, // url
        dataRequest,
        function (data, status, jqXHR) {  // success callback
            //alert('status: ' + textStatus + ', data:' + data);
            $('#central_content').fadeOut('fast', 'swing', function () {
                //removeActiveClassForAllDashboardLinks();
                //$(linkId).addClass('active');
                //$('.dashboard__sidebar').removeClass('active')
                //$('.overlay').removeClass('active')
                //$('#dashboardPage').empty();
                $("#central_content").html(data);
            });
            $('#central_content').fadeIn();

            if (dontTouchHash) {

            } else {
                window.location.hash = dataRequest.page;
            }
            currentPageHash = window.location.hash;
            //window.history.pushState({}, "Backpage", "http://localhost/acompes2017/test.php");
            // $('p').append('status: ' + status + ', data: ' + data);
        });

    removeLoader();
    //scrollToElement('dashboardPage');
}

function setSearchBarLoader(elementId) {
    elementId = document.getElementById(elementId);
    $(elementId).addClass('line');
    //$(className).removeClass('line')
}

function removeSearchBarLoader(elementId) {
    elementId = document.getElementById(elementId);
    $(elementId).removeClass('line');
}

// $(window).on("navigate", function (event, data) {
//     var direction = data.state.direction;
//     if (direction == 'back') {
//         // Do something
//         window.alert('back');
//     }
//     if (direction == 'forward') {
//         // Do something else
//         window.alert('forward');
//     }
// });