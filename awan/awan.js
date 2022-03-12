jQuery(function () {

    // alert('hello');


    awan1_jalan();
    awan2_jalan();
    awan3_jalan();
    awan31_jalan();
    awan32_jalan();


});

function awan1_jalan() {
    var document_width = $(document).width();
    document_width = document_width + 200;

    var  incr = -200;
    setInterval(function () {
        
        $('#bg-awan1').css('left', (incr + 'px') );

        if (incr > document_width) {
            incr = -200;
        }
        incr = incr + 1;
    }, 8);

}


function awan2_jalan() {
    var document_width = $(document).width();
    document_width = document_width + 200;

    var  incr = -320;
    setInterval(function () {
        
        $('#bg-awan2').css('left', (incr + 'px') );

        if (incr > document_width) {
            incr = -320;
        }
        incr = incr + 1;
    }, 15);

}

function awan3_jalan() {
    var document_width = $(document).width();
    document_width = document_width + 200;

    var  incr = -100;
    setInterval(function () {
        
        $('#bg-awan3').css('left', (incr + 'px') );

        if (incr > document_width) {
            incr = -100;
        }
        incr = incr + 1;
    }, 5);

}

function awan31_jalan() {
    var document_width = $(document).width();
    document_width = document_width + 200;

    var  incr = 500;
    setInterval(function () {
        
        $('#bg-awan31').css('left', (incr + 'px') );

        if (incr > document_width) {
            incr = -100;
        }
        incr = incr + 1;
    }, 20);

}


function awan32_jalan() {
    var document_width = $(document).width();
    document_width = document_width + 200;

    var  incr = 774;
    setInterval(function () {
        
        $('#bg-awan32').css('left', (incr + 'px') );

        if (incr > document_width) {
            incr = -100;
        }
        incr = incr + 1;
    }, 15);

}