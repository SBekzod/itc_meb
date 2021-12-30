console.log("JS IS RUNNING!")


$(function () {

    var count = 0;
    $(".prev_menu").on('click', () => {
        count++;
        console.log(count);
        if (count === 1) {
            $("#round1").css("border", "none");
            $("#round2").css("border", "1px solid white");
            $(".header_images").css({"background": "url('https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80')"})
        } else if (count === 2) {
            $("#round2").css("border", "none");
            $("#round3").css("border", "1px solid white");
            $(".header_images").css({"background": "url('https://images.unsplash.com/photo-1505691938895-1758d7feb511?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')"})
        // } else if (count === 3) {
        //     // $(".header_images").css({"background": "url('https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80')"})
        //     count--;

            $(".prev_menu").css({"opacity": "0.3"})
            $(".next_menu").css({"opacity": "1"})
            // if (count ===)
        }
    });

    $(".next_menu").on('click', () => {
        console.log(`counter: ${count}`)
        count--;
        if (count === 1) {
            $("#round3").css("border", "none");
            $("#round2").css("border", "1px solid white");
            $(".header_images").css({"background": "url('https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80')"})

        } else if (count === 0 ) {
            $("#round2").css("border", "none");
            $("#round1").css("border", "1px solid white");
            $(".header_images").css({"background": "url('https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80')"})
            $(".next_menu").css({"opacity": "0.3"})
            $(".prev_menu").css({"opacity": "1"})
        }
    })






});