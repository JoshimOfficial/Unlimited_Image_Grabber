<?php 

function footer($conn) {
    ?>

<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800 transition-all duration-200">
  <div class="mx-auto max-w-screen-xl text-center">
      <a href="<?php echo rootDomain($conn);?>" class="flex justify-center items-center md:text-2xl font-semibold text-gray-900 dark:text-white">
          <img src="./assets/image/logo_fav/logo.svg" class="mr-2 h-8" />

          Unlimited Image Grabber    
      </a>
      <p class="my-6 text-gray-500 dark:text-gray-400">Open-source project based on grabbing the images with search.</p>
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023-<?php echo date("Y"); ?> <a href="<?php echo rootDomain($conn);?>" class="hover:underline">Unlimited Image Grabber </a>. All Rights Reserved.</span>
  </div>
</footer>

    <?php 
}

?>