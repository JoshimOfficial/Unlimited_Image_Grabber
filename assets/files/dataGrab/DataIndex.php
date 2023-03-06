<?php 
function allImages($conn) {
    ?>
<section class="md:w-xl h-fit p-5 m-auto" id="resultSectionParent">
        <div class="flex justify-evenly flex-wrap" id="resultSectionChild">
        </div>

        <div class="h-1 border-b border-gray-300 dark:border-gray-500"></div>
        <div class="w-full flex justify-center">
        <button class="transition-all duration-200 hover:bg-blue-700 bg-blue-600 text-white p-6 py-2 rounded my-7 m-5 hidden" id="prevBtn">Previous</button>
        <button class="transition-all duration-200 hover:bg-blue-700 bg-blue-600 text-white p-6 py-2 rounded my-7 m-5" id="nextBtn">Next</button>
        </div>
</section>
    <script>
        let skletonLoadingTemplate = `
        
        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3 bg-gray-300 dark:bg-gray-700 animate-pulse ">
                
        </div>
        

        <div class="w-96 h-56 rounded my-3">
        </div>

        `
        $("#resultSectionChild").html(skletonLoadingTemplate);


//Default ajax request
        $.ajax({
    url: './assets/files/dataGrab/searchData.php',
    method: 'POST',
    data: {
        query: `<?php 
                $search = $_SESSION["query"];
                $updatedQuery = str_replace(' ', '+', $search);
                echo $updatedQuery?>`,
        first: 0
    },
    success: function(response) {
        $("#resultSectionChild").html(response);
    },
    error: function(xhr, status, error) {
        console.log(error);
    }
});




//Next button ajax request

//set click count
localStorage.setItem('nextCount', 1);

count = 1;
$("#nextBtn").click(function() {

    // Set data to Local Storage
    localStorage.setItem('nextCount', count += 1);

    let startsFrom = localStorage.getItem('nextCount');
    $("#resultSectionChild").html(skletonLoadingTemplate);

    $.ajax({
        url: './assets/files/dataGrab/searchData.php',
        method: 'POST',
        data: {
            query: `<?php 
                $search = $_SESSION["query"];
                $updatedQuery = str_replace(' ', '+', $search);
                echo $updatedQuery?>`,
            first: startsFrom * 35
        },
        success: function(response) {
            $("#resultSectionChild").html(response);
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });

    //detecting that `Previous button` should be shown or not 
    let totalClicks = localStorage.getItem('nextCount');
    if (totalClicks > 1) {
        $("#prevBtn").removeClass("hidden");
    } else {
        $("#prevBtn").addClass("hidden");
    }

})



//Previous Buttn ajax request
$("#prevBtn").click(function() {
    let totalNextCount = localStorage.getItem('nextCount');

    localStorage.setItem('nextCount', totalNextCount - 1);

    console.log(totalNextCount);
    if (totalNextCount > 1) {


        $("#resultSectionChild").html(skletonLoadingTemplate);

        $.ajax({
            url: './assets/files/dataGrab/searchData.php',
            method: 'POST',
            data: {
                query: `<?php 
                $search = $_SESSION["query"];
                $updatedQuery = str_replace(' ', '+', $search);
                echo $updatedQuery?>`,
                first: totalNextCount * 35
            },
            success: function(response) {
                $("#resultSectionChild").html(response);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });

    }
})




    </script>
    <?php
}
?>