<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Choose GeekLearn for high-quality courses taught by expert instructors. Our user-friendly platform and self-paced courses make it easy for you to learn at your own pace. Join the thousands of learners who have already benefitted from our comprehensive courses.</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

     
      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+50k</h3>
            <span>brilliants students</span>
         </div>
      </div>

     

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+2k</h3>
            <span>online courses</span>
         </div>
      </div>


      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>
      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+10k</h3>
            <span>expert teachers</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>I've been using GeekLearn for a few months now, and I'm impressed with the depth of the courses. The content is well-researched and up-to-date, and the instructors are passionate about their subjects. The customer service is also top-notch, with quick responses to any questions or concerns. Highly recommend to anyone looking to expand their knowledge!</p>
         <div class="user">
            <img src="images/pic-2.JPEG" alt="">
            <div>
               <h3>Sanya</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I'm a visual learner, so I appreciate the high-quality videos that GeekLearn offers. The courses are presented in a way that's easy to understand, and the quizzes and assignments are a great way to reinforce what I've learned. The website is also well-organized, making it easy to find the courses I'm interested in. Overall, a great experience!</p>
         <div class="user">
            <img src="images/pic-17.JPEG" alt="">
            <div>
               <h3>smith</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                 
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I was hesitant to try an e-learning website, but GeekLearn exceeded my expectations. The courses are well-designed, and the interactive elements make learning engaging and fun. The instructors are experts in their fields, and I appreciated the opportunity to learn from them. Would recommend to anyone looking to learn something new!</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Olivia</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I recently signed up for GeekLearn and was blown away by the quality of the courses. The material was presented in a clear and concise manner, making it easy for me to follow along and understand. The quizzes were also a great way to test my knowledge and reinforce what I had learned. Highly recommended!</p>
         <div class="user">
            <img src="images/pic-21.JPEG" alt="">
            <div>
               <h3>Samuel</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I've tried a few e-learning websites in the past, but none of them compare to GeekLearn. The courses are well-organized and easy to follow, The ability to learn at my own pace was a game-changer for me, and I appreciate how the website allows me to track my progress and see how far I've come.</p>
         <div class="user">
            <img src="images/pic-4.JPEG" alt="">
            <div>
               <h3>William</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I'm always looking for ways to improve my skills, and GeekLearn has been a great resource for me. The courses are comprehensive and cover a wide range of topics, and the platform is easy to use. I also appreciate the flexibility of being able to learn on my own schedule. Overall, a great investment in my professional development.</p>
         <div class="user">
            <img src="images/pic-3.JPEG" alt="">
            <div>
               <h3>Amelia</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>