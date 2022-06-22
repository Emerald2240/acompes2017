$(window).on('load', function () {
    removeLoader();
});

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
    $('.preloader').show();
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

function loadNewPage(url, dataRequest) {
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
            // $('p').append('status: ' + status + ', data: ' + data);
        });

    //removeLoader();
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