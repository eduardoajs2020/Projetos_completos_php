<?php
include_once("templates/header.php");

if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

      
    foreach($posts as $post){

        if($post['id']==$postId){
        $currentPost = $post;
                
        }
    
    }

}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?=$BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing elit pellentesque. Facilisis gravida neque convallis a cras semper auctor. Velit dignissim sodales ut eu sem integer vitae justo eget. Amet nisl purus in mollis nunc sed id semper risus. Dui id ornare arcu odio. Enim tortor at auctor urna nunc id cursus. Volutpat consequat mauris nunc congue. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat. Blandit massa enim nec dui nunc mattis. At elementum eu facilisis sed. Scelerisque purus semper eget duis at. Pellentesque massa placerat duis ultricies lacus.

Eu augue ut lectus arcu bibendum at varius. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Enim nulla aliquet porttitor lacus luctus. Nisi porta lorem mollis aliquam ut porttitor. Volutpat commodo sed egestas egestas. Odio euismod lacinia at quis risus sed vulputate odio. Quis varius quam quisque id diam vel quam elementum. Ultrices gravida dictum fusce ut placerat orci nulla. Viverra aliquet eget sit amet tellus cras adipiscing enim. Mauris cursus mattis molestie a iaculis at erat. Lectus nulla at volutpat diam ut venenatis. Id diam vel quam elementum. Odio facilisis mauris sit amet massa vitae tortor.

Proin libero nunc consequat interdum varius sit. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Ultrices eros in cursus turpis massa. Euismod nisi porta lorem mollis aliquam ut. Consectetur purus ut faucibus pulvinar elementum integer. Pellentesque nec nam aliquam sem et tortor consequat id. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Mauris a diam maecenas sed enim ut. Turpis cursus in hac habitasse platea dictumst. Sapien eget mi proin sed libero enim. Egestas dui id ornare arcu odio. Pretium fusce id velit ut tortor pretium viverra suspendisse. A pellentesque sit amet porttitor eget dolor morbi non arcu. In hac habitasse platea dictumst vestibulum rhoncus. Eu lobortis elementum nibh tellus molestie nunc non blandit. Vitae et leo duis ut diam. Consectetur a erat nam at lectus. Eget lorem dolor sed viverra ipsum nunc aliquet. Dolor sit amet consectetur adipiscing elit pellentesque.

Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Ut tortor pretium viverra suspendisse potenti nullam ac tortor. Dis parturient montes nascetur ridiculus mus. Vulputate enim nulla aliquet porttitor lacus. Tellus at urna condimentum mattis pellentesque id nibh. Hac habitasse platea dictumst vestibulum rhoncus est. Sed faucibus turpis in eu mi bibendum neque egestas congue. Suscipit tellus mauris a diam. Et netus et malesuada fames ac turpis egestas integer eget. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci.

Massa sapien faucibus et molestie ac feugiat sed. Ante metus dictum at tempor commodo ullamcorper a lacus. Iaculis nunc sed augue lacus viverra vitae. Odio ut sem nulla pharetra diam sit. Aliquam malesuada bibendum arcu vitae. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat. Nulla aliquet porttitor lacus luctus accumsan tortor. Porta lorem mollis aliquam ut porttitor leo a. Odio eu feugiat pretium nibh ipsum consequat nisl. Nibh mauris cursus mattis molestie a iaculis at erat. Fames ac turpis egestas integer. Sed blandit libero volutpat sed cras ornare arcu dui. Tellus in metus vulputate eu scelerisque felis imperdiet. Platea dictumst quisque sagittis purus sit amet volutpat consequat mauris. Risus sed vulputate odio ut enim. Tincidunt tortor aliquam nulla facilisi cras fermentum odio.
        </p>
    <br>
    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing elit pellentesque. Facilisis gravida neque convallis a cras semper auctor. Velit dignissim sodales ut eu sem integer vitae justo eget. Amet nisl purus in mollis nunc sed id semper risus. Dui id ornare arcu odio. Enim tortor at auctor urna nunc id cursus. Volutpat consequat mauris nunc congue. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat. Blandit massa enim nec dui nunc mattis. At elementum eu facilisis sed. Scelerisque purus semper eget duis at. Pellentesque massa placerat duis ultricies lacus.

Eu augue ut lectus arcu bibendum at varius. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Enim nulla aliquet porttitor lacus luctus. Nisi porta lorem mollis aliquam ut porttitor. Volutpat commodo sed egestas egestas. Odio euismod lacinia at quis risus sed vulputate odio. Quis varius quam quisque id diam vel quam elementum. Ultrices gravida dictum fusce ut placerat orci nulla. Viverra aliquet eget sit amet tellus cras adipiscing enim. Mauris cursus mattis molestie a iaculis at erat. Lectus nulla at volutpat diam ut venenatis. Id diam vel quam elementum. Odio facilisis mauris sit amet massa vitae tortor.

Proin libero nunc consequat interdum varius sit. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Ultrices eros in cursus turpis massa. Euismod nisi porta lorem mollis aliquam ut. Consectetur purus ut faucibus pulvinar elementum integer. Pellentesque nec nam aliquam sem et tortor consequat id. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Mauris a diam maecenas sed enim ut. Turpis cursus in hac habitasse platea dictumst. Sapien eget mi proin sed libero enim. Egestas dui id ornare arcu odio. Pretium fusce id velit ut tortor pretium viverra suspendisse. A pellentesque sit amet porttitor eget dolor morbi non arcu. In hac habitasse platea dictumst vestibulum rhoncus. Eu lobortis elementum nibh tellus molestie nunc non blandit. Vitae et leo duis ut diam. Consectetur a erat nam at lectus. Eget lorem dolor sed viverra ipsum nunc aliquet. Dolor sit amet consectetur adipiscing elit pellentesque.

Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Ut tortor pretium viverra suspendisse potenti nullam ac tortor. Dis parturient montes nascetur ridiculus mus. Vulputate enim nulla aliquet porttitor lacus. Tellus at urna condimentum mattis pellentesque id nibh. Hac habitasse platea dictumst vestibulum rhoncus est. Sed faucibus turpis in eu mi bibendum neque egestas congue. Suscipit tellus mauris a diam. Et netus et malesuada fames ac turpis egestas integer eget. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci.

Massa sapien faucibus et molestie ac feugiat sed. Ante metus dictum at tempor commodo ullamcorper a lacus. Iaculis nunc sed augue lacus viverra vitae. Odio ut sem nulla pharetra diam sit. Aliquam malesuada bibendum arcu vitae. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat. Nulla aliquet porttitor lacus luctus accumsan tortor. Porta lorem mollis aliquam ut porttitor leo a. Odio eu feugiat pretium nibh ipsum consequat nisl. Nibh mauris cursus mattis molestie a iaculis at erat. Fames ac turpis egestas integer. Sed blandit libero volutpat sed cras ornare arcu dui. Tellus in metus vulputate eu scelerisque felis imperdiet. Platea dictumst quisque sagittis purus sit amet volutpat consequat mauris. Risus sed vulputate odio ut enim. Tincidunt tortor aliquam nulla facilisi cras fermentum odio.
        </p>
    <br>
    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing elit pellentesque. Facilisis gravida neque convallis a cras semper auctor. Velit dignissim sodales ut eu sem integer vitae justo eget. Amet nisl purus in mollis nunc sed id semper risus. Dui id ornare arcu odio. Enim tortor at auctor urna nunc id cursus. Volutpat consequat mauris nunc congue. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat. Blandit massa enim nec dui nunc mattis. At elementum eu facilisis sed. Scelerisque purus semper eget duis at. Pellentesque massa placerat duis ultricies lacus.

Eu augue ut lectus arcu bibendum at varius. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Enim nulla aliquet porttitor lacus luctus. Nisi porta lorem mollis aliquam ut porttitor. Volutpat commodo sed egestas egestas. Odio euismod lacinia at quis risus sed vulputate odio. Quis varius quam quisque id diam vel quam elementum. Ultrices gravida dictum fusce ut placerat orci nulla. Viverra aliquet eget sit amet tellus cras adipiscing enim. Mauris cursus mattis molestie a iaculis at erat. Lectus nulla at volutpat diam ut venenatis. Id diam vel quam elementum. Odio facilisis mauris sit amet massa vitae tortor.

Proin libero nunc consequat interdum varius sit. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Ultrices eros in cursus turpis massa. Euismod nisi porta lorem mollis aliquam ut. Consectetur purus ut faucibus pulvinar elementum integer. Pellentesque nec nam aliquam sem et tortor consequat id. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Mauris a diam maecenas sed enim ut. Turpis cursus in hac habitasse platea dictumst. Sapien eget mi proin sed libero enim. Egestas dui id ornare arcu odio. Pretium fusce id velit ut tortor pretium viverra suspendisse. A pellentesque sit amet porttitor eget dolor morbi non arcu. In hac habitasse platea dictumst vestibulum rhoncus. Eu lobortis elementum nibh tellus molestie nunc non blandit. Vitae et leo duis ut diam. Consectetur a erat nam at lectus. Eget lorem dolor sed viverra ipsum nunc aliquet. Dolor sit amet consectetur adipiscing elit pellentesque.

Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Ut tortor pretium viverra suspendisse potenti nullam ac tortor. Dis parturient montes nascetur ridiculus mus. Vulputate enim nulla aliquet porttitor lacus. Tellus at urna condimentum mattis pellentesque id nibh. Hac habitasse platea dictumst vestibulum rhoncus est. Sed faucibus turpis in eu mi bibendum neque egestas congue. Suscipit tellus mauris a diam. Et netus et malesuada fames ac turpis egestas integer eget. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci.

Massa sapien faucibus et molestie ac feugiat sed. Ante metus dictum at tempor commodo ullamcorper a lacus. Iaculis nunc sed augue lacus viverra vitae. Odio ut sem nulla pharetra diam sit. Aliquam malesuada bibendum arcu vitae. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat. Nulla aliquet porttitor lacus luctus accumsan tortor. Porta lorem mollis aliquam ut porttitor leo a. Odio eu feugiat pretium nibh ipsum consequat nisl. Nibh mauris cursus mattis molestie a iaculis at erat. Fames ac turpis egestas integer. Sed blandit libero volutpat sed cras ornare arcu dui. Tellus in metus vulputate eu scelerisque felis imperdiet. Platea dictumst quisque sagittis purus sit amet volutpat consequat mauris. Risus sed vulputate odio ut enim. Tincidunt tortor aliquam nulla facilisi cras fermentum odio.
        </p>
    <br>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag):?>
        <li><a href="#"><?= $tag?></a></li>
        <?php endforeach;?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category):?>
        <li><a href="#"><?= $category?></a></li>
        <?php endforeach;?>
    </ul>
</aside>
</main>
<?php
include_once("templates/footer.php");
?>