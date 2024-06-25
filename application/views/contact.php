      <!-- start: Breadcrumb Area -->
      <section class="breadcrumb-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-content-area">
                     <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title">Contact Us</h1>
                     </div>
                     <div class="breadcrumb-link">
                        <span>
                           <a href="index.html">
                              <span>Home</span>
                           </a>
                        </span>
                        <i class="fa-light fa-angle-right"></i>
                        <span>
                           <span>Contact Us</span>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tj-breadcrumb-shape">
            <div class="breadcrumb-shape-one">
               <img src="assets/images/shape/breadcrumb-1.svg" alt="Shape" />
            </div>
            <div class="breadcrumb-shape-two">
               <img src="assets/images/shape/breadcrumb-2.svg" alt="Shape" />
            </div>
            <div class="breadcrumb-shape-1 pulse">
               <img src="assets/images/shape/shape-7.svg" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-2 shake-y">
               <img src="assets/images/shape/shape-4.svg" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-3 pulse">
               <img src="assets/images/shape/shape-6.svg" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-4 shake-y">
               <img src="assets/images/shape/shape-4.svg" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-5 pulse">
               <img src="assets/images/shape/shape-6.svg" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-6 pulse">
               <img src="assets/images/shape/shape-51.svg" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-7 shake-y">
               <img src="assets/images/shape/shape-5.svg" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-8 pulse">
               <img src="assets/images/shape/shape-6.svg" alt="Icon" />
            </div>
         </div>
      </section>
      <!-- end: Breadcrumb Area -->

      <?php include 'include/contact.php'; ?>

      <!-- start: Blog Area -->
          <!-- start: Blog Area -->
          <section class="tj-blog-section-two">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tj-sec-heading text-center">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Latest Blogs</span>
                        <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">Latest Blog Post</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
               <?php foreach ($blog as $entry): ?> 
                  <div class="col-lg-4 col-md-6">
                     <div class="tj-blog-item-two wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog-image">
                           <a href="blog-details"><img src="assets/images/blog/blog-4.jpg" alt="Image" /></a>
                           <span class="active-text"><?= (new DateTime($entry->createdAt))->format('M d, Y') ?></span>
                        </div>
                        <div class="blog-content-area">
                           <div class="blog-meta-two">
                              <span><i class="fa-solid fa-user"></i><a href="blog-details">Admin</a></span>
                              <span><i class="fa-regular fa-comments"></i>Comments</span>
                           </div>
                           <h4 class="title-link">
                              <a href="blog-details"><?= $entry->title ?></a>
                           </h4>
                           <div class="desc">
                              <p>
                              <?= $entry->shortDescription ?>
                              </p>
                           </div>
                           <div class="tj-read-more-button">
                              <a href="<?=base_url()?>Blog/viewBlog/<?= $entry->link ?>" class="btn tj-black-btn"><span>Read More</span> </a>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
                 
               </div>
            </div>
         </section>
         <!-- end: Blog Area -->
      <!-- end: Blog Area -->

