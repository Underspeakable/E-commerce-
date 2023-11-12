let date = new Date();
let todayDate = date.toISOString().split('T')[0];
let currDate = document.querySelector('.time')
currDate.innerHTML = `${todayDate}`

///////////////////////////////////////////////////








// $(document).ready(function () {
//     $("a").on("click", function (event) {
//       if (this.hash !== "") {
//         event.preventDefault();
  
//         var hash = this.hash;
//         $("html, body").animate(
//           {
//             scrollTop: $(hash).offset().top,
//           },
//           800,
//           function () {
//             window.location.hash = hash;
//           }
//         );
//       }
//     });
//   });
  
//   $(".menu-items a").click(function () {
//     $("#checkbox").prop("checked", false);
//   });
  

 