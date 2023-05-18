
<?php
get_header();
?>

    <div class="slides">
      <div class="owl-carousel owl-fade-in owl-item">
        <div id="carouselCard"> <img src="https://picsum.photos/300/300" alt=""></div>
        <div id="carouselCard"> <img src="https://picsum.photos/300/300" alt=""> </div>
        <div id="carouselCard"> <img src="https://picsum.photos/300/300" alt=""> </div>
        <div id="carouselCard"> <img src="https://picsum.photos/300/300" alt=""> </div>
        <div id="carouselCard"> <img src="https://picsum.photos/300/300" alt=""> </div>
        <div id="carouselCard"> <img src="https://picsum.photos/300/300" alt=""> </div>
        <div id="carouselCard"> <img src="https://picsum.photos/300/300" alt=""> </div>
      </div>
    </div>

    <div class="categories">
      <h1 class="centeredText" id="choo">CHOOSE A CATEGORY</h1>

      <div class="roundButtons">
        <div >
        <button class="roundButton parent"><p id="sign">+</p></button>
        <p class="child" id="buttonText">Travel stories</p>
      </div>
      <div>
        <button class="roundButton"><p id="sign">+</p></button>
        <p id="buttonText">Solo travel</p>
      </div>
      <div>
        <button class="roundButton"><p id="sign">+</p></button>
        <p id="buttonText">Adventure sports</p>
      </div>
      <div>
        <button class="roundButton"><p id="sign">+</p></button>
        <p id="buttonText">Cruises</p>
      </div>
      <div>
        <button class="roundButton"><p id="sign">+</p></button>
        <p id="buttonText">On the road</p>
      </div>
      <div>
        <button class="roundButton"><p id="sign">+</p></button>
        <p id="buttonText">Hotels</p>
      </div>
         <div>
        <button class="roundButton"><p id="sign">+</p></button>
        <p id="buttonText">Travel tips</p>
      </div>

      </div>
    </div>

    <div class="featured">
      <div>
        <h1 class="centeredText" id="featExp">FEATURED EXPLORE</h1>
        <p class="centeredText" id="journey">
          Let's make an intresting journey throughout our planet
        </p>
      </div>
      <div class="allCards">

        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 6,
            'order_by' => 'date',
            'order' => 'ASC',
        ];
        $query = new WP_Query($args);

        $posts = $query->get_posts();

        if ( $query->have_posts() ) {
          foreach ($posts as $post){
            ?>
            <div class="card">
              <div class="cardImage">
                <img class="cardImage" src="https://picsum.photos/420/304" alt="" />
              </div>
              <div class="cardContent">
                <p>
                  <a id="deColor" href="/about/about_team.htm"

                  ><mark class="yellowColor"><?php echo $post->post_date ?></mark></a
                  >
                </p>
                <h3>
                  <?php echo $post->post_title?>
                </h3>
                <p id="cardText">
                  <?php echo $post->post_content?>
                </p>
              </div>
            </div>
            <?php
          }
        }
        ?>

      </div>
    </div>
    </div>

    <div class="popularPosts">
      <div>
        <h1 class="centeredText" id="pop">POPULAR POSTS</h1>
        <p class="centeredText" id="exp">Explore a different way to travel</p>
      </div>
      <div class="cardsAndSidebar">
        <div class="popularPostsCards">
          <div class="popularPostsCard">
            <div class="cardImage">
              <img
                class="cardImage"
                src="https://picsum.photos/seed/picsum/200/300"
                alt=""
              />
            </div>
            <div class="cardContent">
              <p>
                <a id="deColor" href="/about/about_team.htm"
                  ><mark class="yellowColor">team</mark></a
                >
                <mark class="lightGrayColor">by</mark>
                <mark class="darkBrownColor">Tia E. Mclaren</mark>
              </p>
              <h3>5 Places To Visit This Summer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea ut
                delectus unde aperiam quis porro iusto quisquam quas?
              </p>
            </div>
          </div>
          <div class="popularPostsCard">
            <div class="cardImage">
              <img
                class="cardImage"
                src="https://picsum.photos/seed/picsum/200/300"
                alt=""
              />
            </div>
            <div class="cardContent">
              <p>
                <a id="deColor" href="/about/about_team.htm"
                  ><mark class="yellowColor">team</mark></a
                >
                <mark class="lightGrayColor">by</mark>
                <mark class="darkBrownColor">Tia E. Mclaren</mark>
              </p>
              <h3>5 Places To Visit This Summer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea ut
                delectus unde aperiam quis porro iusto quisquam quas?
              </p>
            </div>
          </div>
          <div class="popularPostsCard">
            <div class="cardImage">
              <img
                class="cardImage"
                src="https://picsum.photos/seed/picsum/200/300"
                alt=""
              />
            </div>
            <div class="cardContent">
              <p>
                <a id="deColor" href="/about/about_team.htm"
                  ><mark class="yellowColor">team</mark></a
                >
                <mark class="lightGrayColor">by</mark>
                <mark class="darkBrownColor">Tia E. Mclaren</mark>
              </p>
              <h3>5 Places To Visit This Summer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea ut
                delectus unde aperiam quis porro iusto quisquam quas?
              </p>
            </div>
          </div>
          <div class="popularPostsCard">
            <div class="cardImage">
              <img
                class="cardImage"
                src="https://picsum.photos/seed/picsum/200/300"
                alt=""
              />
            </div>
            <div class="cardContent">
              <p>
                <a id="deColor" href="/about/about_team.htm"
                  ><mark class="yellowColor">team</mark></a
                >
                <mark class="lightGrayColor">by</mark>
                <mark class="darkBrownColor">Tia E. Mclaren</mark>
              </p>
              <h3>5 Places To Visit This Summer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea ut
                delectus unde aperiam quis porro iusto quisquam quas?
              </p>
            </div>
          </div>
          <div class="popularPostsCard">
            <div class="cardImage">
              <img
                class="cardImage"
                src="https://picsum.photos/seed/picsum/200/300"
                alt=""
              />
            </div>
            <div class="cardContent">
              <p>
                <a id="deColor" href="/about/about_team.htm"
                  ><mark class="yellowColor">team</mark></a
                >
                <mark class="lightGrayColor">by</mark>
                <mark class="darkBrownColor">Tia E. Mclaren</mark>
              </p>
              <h3>5 Places To Visit This Summer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea ut
                delectus unde aperiam quis porro iusto quisquam quas?
              </p>
            </div>
          </div>
        </div>
        <div id="sideBar">
          <div class="latestPosts">
            <h3 id="h3Latest">LATEST POSTS</h3>
            <div class="popularPostsCard">
              <div class="cardImage">
                <img
                  class="sidebarCardImage"
                  src="https://picsum.photos/236/420"
                  alt=""
                />
              </div>
              <div class="cardContent">
                <p>
                  <a href="/about/about_team.htm"
                    ><mark class="yellowColor">team</mark></a
                  >
                  <mark class="lightGrayColor">by</mark>
                  <mark class="darkBrownColor">Tia E. Mclaren</mark>
                </p>
                <h3>5 Places To Visit This Summer</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                  ut delectus unde aperiam quis porro iusto quisquam quas?
                </p>
              </div>
            </div>
            <div class="popularPostsCard">
              <div class="cardImage">
                <img
                  class="sidebarCardImage"
                  src="https://picsum.photos/236/420"
                  alt=""
                />
              </div>
              <div class="cardContent">
                <p>
                  <a id="deColor" href="/about/about_team.htm"
                    ><mark class="yellowColor">team</mark></a
                  >
                  <mark class="lightGrayColor">by</mark>
                  <mark class="darkBrownColor">Tia E. Mclaren</mark>
                </p>
                <h3>5 Places To Visit This Summer</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                  ut delectus unde aperiam quis porro iusto quisquam quas?
                </p>
              </div>
            </div>
            <div class="popularPostsCard">
              <div class="cardImage">
                <img
                  class="sidebarCardImage"
                  src="https://picsum.photos/236/420"
                  alt=""
                />
              </div>
              <div class="cardContent">
                <p>
                  <a id="deColor" href="/about/about_team.htm"
                    ><mark class="yellowColor">team</mark></a
                  >
                  <mark class="lightGrayColor">by</mark>
                  <mark class="darkBrownColor">Tia E. Mclaren</mark>
                </p>
                <h3>5 Places To Visit This Summer</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                  ut delectus unde aperiam quis porro iusto quisquam quas?
                </p>
              </div>
            </div>
            <div class="popularPostsCard">
              <div class="cardImage">
                <img
                  class="sidebarCardImage"
                  src="https://picsum.photos/236/420"
                  alt=""
                />
              </div>
              <div class="cardContent">
                <p>
                  <a id="deColor" href="/about/about_team.htm"
                    ><mark class="yellowColor">team</mark></a
                  >
                  <mark class="lightGrayColor">by</mark>
                  <mark class="darkBrownColor">Tia E. Mclaren</mark>
                </p>
                <h3>5 Places To Visit This Summer</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                  ut delectus unde aperiam quis porro iusto quisquam quas?
                </p>
              </div>
            </div>
          </div>
          <div id="advertisiment">
            <img id="sideBanner" src="\wordpress\wp-content\themes\figmaTheme\assets\images\BANNER.png" alt="" />
          </div>
          <div class="tags">
            <h3 id="h3Tags">TAGS</h3>
            <ul id="tagLinks">
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">On the road</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Festivals</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Gear</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Exotic</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Cruises</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Hotels</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Travel tips</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Airlines</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Trendy</mark></a
                >
              </li>
              <li>
                <a href="https://www.w3schools.com/"
                  ><mark class="yellowColor">Photography</mark></a
                >
              </li>
            </ul>
          </div>
          <div class="aboutAuthor">
            <h3 id="aboutAuthor">ABOUT AUTHOR</h3>
            <p>Eget donec nunc feugiat aliquet odio dignissim volutpat. Lacus quam cursus sed nullam tristique in viverra id.</p>
          </div>
        </div>
      </div>
    <div class="popPostsButtons">
      <button class="popularRoundButton"><p id="button">1</p></button>
      <button class="popularRoundButton"><p id="button">2</p></button>
      <button class="popularRoundButton"><p id="button">3</p></button>
      <button class="popularRoundButton"><p id="button">></p></button>
    </div>
    </div>
    <div class="subscribe">
      <div>
        <h1 id="sub">SUBSCRIBE TO OUR NEWSLETTER</h1>
      </div>
      <div>
        <form>
          <input type="text" id="mail" name="mail" value="    E-mail"  />
          <input  id="submit" type="submit" value="Subscribe" />
        </form>
      </div>
    </div>

    <div class="followUsOnInstagram">
      <div>
        <h1 class="centeredText" id="foll">FOLLOW US ON INSTAGRAM</h1>
      </div>
      <div class="centeredText yellowColor padBtm15px">
        <p class="">@mangata</p>
      </div>
      <div class="bottomImages">
        <div class="bottomImage" id="first">
        </div>
        <div class="bottomImage">
        </div>
        <div class="bottomImage">
        </div>
        <div class="bottomImage">
        </div>
        <div class="bottomImage">
        </div>
        <div class="bottomImage" id="last">
        </div>
      </div>
    </div>
   
    <?php
get_footer();
?>