/**
 * Created by abigaelonchiri on 4/28/15.
 */
/** The Memory JavaScript class. */
function Memory() {
    var that = this ;


    // Handle the click of the number buttons
    $("button").click(function(event) {
        event.preventDefault();     // Don't allow it to submit the form

       // alert("clicked");
       // var src = $("#image0").attr("src");

        if(this.value == "0") {

            $("#image0").attr("src", "images/cat5r.png");
           // alert("yOU CLICKED THE FIRST ONE");
        }
        if(this.value == "1") {

            $("#image1").attr("src", "images/cat1r.png");
          //  alert("yOU CLICKED THE SECOND ONE");
        }
        if(this.value == "2") {
          $("#image2").attr("src", "images/cat2r.png");
        }
        if(this.value == "3") {
           $("#image3").attr("src", "images/cat6r.png");
        }
        if(this.value == "4") {
           $("#image4").attr("src", "images/cat2r.png");
        }
        if(this.value == "5") {
           $("#image5").attr("src", "images/cat3r.png");
        }
        if(this.value == "6") {
          $("#image6").attr("src", "images/cat4r.png");
        }
        if(this.value == "7") {
            $("#image7").attr("src", "images/cat1r.png");
        }
        if(this.value == "8") {
           $("#image8").attr("src", "images/cat4r.png");
        }
        if(this.value == "9") {
          $("#image9").attr("src", "images/cat3r.png");
        }
        if(this.value == "10") {
            $("#image10").attr("src", "images/cat5r.png");
        }
        if(this.value == "11") {
          $("#image11").attr("src", "images/cat6r.png");


        }


    });

    // 0 and 10

    $("#b0").click(function(event){

       if($("#b10").click(function(event){

               $("#image10").attr("src", "images/cat5.png");
               $("#image0").attr("src", "images/cat5.png");
           })
        );

    });


// 10 and 0
    $("#b10").click(function(event) {

        if ($("#b0").click(function (event) {

                $("#image10").attr("src", "images/cat5.png");
                $("#image0").attr("src", "images/cat5.png");
            })
        );
        else {

            $("img").attr("src", "images/tile.png");
        }
    });




// 9 and 5

    $("#b9").click(function(event) {

        if ($("#b5").click(function (event) {

                //  alert("I clicked 2 then 3");
                $("#image9").attr("src", "images/cat3.png");
                $("#image5").attr("src", "images/cat3.png");
            })
        );
    });

// 5 and 9
    $("#b5").click(function(event) {

        if ($("#b9").click(function (event) {

                //  alert("I clicked 2 then 3");
                $("#image9").attr("src", "images/cat3.png");
                $("#image5").attr("src", "images/cat3.png");
            })
        );
    });


// 2 and 4

    $("#b2").click(function(event) {

        if ($("#b4").click(function (event) {


                $("#image2").attr("src", "images/cat2.png");
                $("#image4").attr("src", "images/cat2.png");
            })
        );
    });

// 4 and 2

    $("#b4").click(function(event) {

        if($("#b2").click(function (event) {

                $("#image2").attr("src", "images/cat2.png");
                $("#image4").attr("src", "images/cat2.png");
            })
        );


    });


// 6 and 8

    $("#b6").click(function(event){

        if($("#b8").click(function(event){


                $("#image6").attr("src", "images/cat4.png");
                $("#image8").attr("src", "images/cat4.png");
            })
        );
    });

// 8 and 6
    $("#b8").click(function(event) {

        if ($("#b6").click(function (event) {

                //  alert("I clicked 2 then 3");
                $("#image6").attr("src", "images/cat4.png");
                $("#image8").attr("src", "images/cat4.png");
            })
        );
    });


// 7 and 1


    $("#b7").click(function(event) {

        if ($("#b1").click(function (event) {

                //  alert("I clicked 2 then 3");
                $("#image7").attr("src", "images/cat1.png");
                $("#image1").attr("src", "images/cat1.png");
            })
        );


    });

// 1 and 7
    $("#b1").click(function(event){

        if($("#b7").click(function(event){

                //  alert("I clicked 2 then 3");
                $("#image7").attr("src", "images/cat1.png");
                $("#image1").attr("src", "images/cat1.png");
            })
        );
    });

// 3 and 11


    $("#b3").click(function(event){

        if($("#b11").click(function(event){

                //  alert("I clicked 2 then 3");
                $("#image3").attr("src", "images/cat6.png");
                $("#image11").attr("src", "images/cat6.png");
            })
        );
    });


// 11 and 3
    $("#b11").click(function(event){

        if($("#b3").click(function(event){

                //  alert("I clicked 2 then 3");
                $("#image3").attr("src", "images/cat6.png");
                $("#image11").attr("src", "images/cat6.png");
            })
        );
    });

}
