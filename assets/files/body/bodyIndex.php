<?php 
function body($conn){
   $query = "";
   $isAccess = false;
   if(isset( $_SESSION["access"], $_SESSION["query"], $_COOKIE["_GRAB_DATA"])) {
      if($_SESSION["access"] === $_COOKIE["_GRAB_DATA"]) {
         $isAccess = true;
         $query = $_SESSION["query"];
      }
   }
    ?>
<section class="overflow-x-hidden">
   <section class="bg-white dark:bg-gray-900">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
         <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white uppercase">Unlimited Imgae Grabber</h1>
         <p class="hidden md:flex mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">"Unlimited Image Grabber" is an open source project that allows users to search for and grab an unlimited number of images based on their input.</p>
         <p class="md:hidden text-lg font-normal text-gray-500 lg:text-xl px-1 xl:px-48 dark:text-gray-400">"Unlimited Image Generator": generates endless images based on user input.</p>         
        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
         </div>
         <form class="flex items-center" method="POST" action="./grabHandler.php">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
               <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                  </svg>
               </div>
               <input type="text" name="q" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded md:h-12 focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="HD computer wallpaper" required value="<?php 
               
               if($isAccess) {
                  echo $query;
               }
               
               ?>"/>
            </div>
            <button type="submit" name="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
               </svg>
               Search
            </button>
         </form>
      </div>
   </section>


   <?php 
   if($isAccess) {
      echo allImages($conn);
   }
   else {
      ?>
      <section class="w-full flex justify-center my-10 p-3">
      <?php echo howToUse($conn);?>
   </section>
      <?php 
   }
   ?>

    <?php 
}
?>