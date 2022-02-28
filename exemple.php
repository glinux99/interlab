<style>
    body {
  background: aliceblue;
}

.gtco-testimonials {
  position: relative;
  margin-top: 30px;

  h2 {
    font-size: 30px;
    text-align: center;
    color: #333333;
    margin-bottom: 50px;
  }

  .owl-stage-outer {
    padding: 30px 0;
  }

  .owl-nav {
    display: none;
  }

  .owl-dots {
    text-align: center;

    span {
      position: relative;
      height: 10px;
      width: 10px;
      border-radius: 50%;
      display: block;
      background: #fff;
      border: 2px solid #01b0f8;
      margin: 0 5px;
    }

    .active {
      box-shadow: none;

      span {
        background: #01b0f8;
        box-shadow: none;
        height: 12px;
        width: 12px;
        margin-bottom: -1px;
      }
    }
  }

  .card {
    background: #fff;
    box-shadow: 0 8px 30px -7px #c9dff0;
    margin: 0 20px;
    padding: 0 10px;
    border-radius: 20px;
    border: 0;

    .card-img-top {
      max-width: 100px;
      border-radius: 50%;
      margin: 15px auto 0;
      box-shadow: 0 8px 20px -4px #95abbb;
      width: 100px;
      height: 100px;
    }

    h5 {
      color: #01b0f8;
      font-size: 21px;
      line-height: 1.3;

      span {
        font-size: 18px;
        color: #666666;
      }
    }

    p {
      font-size: 18px;
      color: #555;
      padding-bottom: 15px;
    }
  }

  .active {
    opacity: 0.5;
    transition: all 0.3s;
  }

  .center {
    opacity: 1;

    h5 {
      font-size: 24px;

      span {
        font-size: 20px;
      }
    }

    .card-img-top {
      max-width: 100%;
      height: 120px;
      width: 120px;
    }
  }
}

@media (max-width: 767px) {
  .gtco-testimonials {
    margin-top: 20px;
  }
}

.owl-carousel {
  .owl-nav button {
    &.owl-next, &.owl-prev {
      outline: 0;
    }
  }

  button.owl-dot {
    outline: 0;
  }
}
</style>
<div class="gtco-testimonials">
  <h2>Testimonials Carousel - Cards Comments</h2>
  <div class="owl-carousel owl-carousel1 owl-theme">
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
        <div class="card-body">
          <h5>Ronne Galle <br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
        <div class="card-body">
          <h5>Missy Limana<br />
            <span> Engineer </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
        <div class="card-body">
          <h5>Martha Brown<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
        <div class="card-body">
          <h5>Hanna Lisem<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

</script>