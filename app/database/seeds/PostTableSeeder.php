<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        $post = new Post();
        $post->title = 'Whither the Chillwave?';
        $post->body = 'Vinyl biodiesel typewriter gluten-free. Cornhole mixtape butcher, asymmetrical twee ugh Blue Bottle gastropub fashion axe DIY. Messenger bag Brooklyn Cosby sweater post-ironic chia meggings, Godard kale chips viral roof party farm-to-table. Cardigan vegan before they sold out Helvetica. Tumblr bitters chillwave DIY. Bushwick 90\'s aesthetic Portland fingerstache keytar you probably haven\'t heard of them whatever, Pitchfork paleo Schlitz Helvetica post-ironic. Vinyl normcore semiotics, fap squid distillery umami.';
        $post->user_id = '1';
        $post->save();

        $post = new Post();
        $post->title = 'To Be or Not To Bespoke?';
        $post->body = 'Ennui tattooed iPhone, fixie Williamsburg umami fingerstache literally kogi asymmetrical. Hashtag blog actually Intelligentsia hella put a bird on it. Swag drinking vinegar Shoreditch, narwhal tote bag disrupt typewriter. Banksy chia McSweeney\'s Vice raw denim synth fixie pop-up. High Life squid literally put a bird on it distillery. Quinoa skateboard polaroid High Life meggings viral locavore, Williamsburg aesthetic kale chips direct trade actually Intelligentsia tote bag wayfarers. VHS ethical YOLO, bicycle rights normcore single-origin coffee fanny pack fixie paleo selfies.';
        $post->user_id = '1';
        $post->save();

        $post = new Post();
        $post->title = 'Fixie, Fix Thyself!';
        $post->body = 'Raw denim DIY Odd Future, Schlitz ennui typewriter roof party. Tumblr flexitarian locavore American Apparel put a bird on it kale chips. Roof party vegan food truck twee, cred next level 8-bit polaroid Godard bicycle rights Intelligentsia. Distillery bicycle rights mustache aesthetic. Organic cornhole synth leggings, XOXO next level dreamcatcher aesthetic distillery retro tattooed iPhone Williamsburg raw denim single-origin coffee. Quinoa street art Thundercats, Odd Future mumblecore Neutra cardigan hashtag. Austin polaroid typewriter wolf, freegan salvia umami banjo selfies YOLO semiotics skateboard tofu.';
        $post->user_id = '2';
        $post->save();

        $post = new Post();
        $post->title = 'Typewriter Etiquette, or The Los Feliz Way to Happiness';
        $post->body = 'Hashtag vegan pug deep v, irony disrupt readymade selfies literally meggings hoodie biodiesel art party Shoreditch kitsch. Put a bird on it pug 8-bit sustainable, trust fund direct trade fanny pack McSweeney\'s mlkshk ugh semiotics. Tumblr biodiesel trust fund, Cosby sweater readymade Bushwick narwhal cliche scenester mustache Wes Anderson Etsy. Authentic leggings sustainable drinking vinegar 3 wolf moon VHS letterpress normcore, locavore Echo Park vegan Blue Bottle fanny pack church-key. Polaroid before they sold out yr DIY sriracha. Shoreditch Carles cliche, before they sold out bicycle rights Pinterest authentic sriracha craft beer. Sriracha wolf food truck shabby chic Thundercats.';
        $post->user_id = '2';
        $post->save();

        $post = new Post();
        $post->title = 'The Telltale Cameo';
        $post->body = 'Letterpress ethnic vegan Pitchfork, literally shabby chic Shoreditch scenester. Bushwick flannel single-origin coffee church-key Brooklyn. Mixtape hoodie banh mi dreamcatcher leggings irony, High Life church-key wolf retro seitan squid selvage. Viral Banksy plaid, kitsch YOLO Echo Park scenester sustainable PBR&B Portland small batch twee DIY skateboard 90\'s. Seitan fap before they sold out, trust fund twee ennui drinking vinegar keffiyeh Portland Wes Anderson Vice aesthetic Bushwick disrupt cornhole. Mlkshk gastropub you probably haven\'t heard of them biodiesel, yr kale chips salvia tofu typewriter bicycle rights wolf farm-to-table kogi. Forage farm-to-table drinking vinegar wolf, PBR&B High Life fingerstache banjo sartorial gentrify butcher sustainable mustache 3 wolf moon mumblecore.';
        $post->user_id = '3';
        $post->save();

        $post = new Post();
        $post->title = 'Williamsburg Woes, or How I Stopped Worrying and Learned to Love Something';
        $post->body = 'Jean shorts salvia synth brunch fixie. Wolf chia pork belly, twee mixtape single-origin coffee Pitchfork actually McSweeney\'s hoodie butcher banjo gentrify sriracha pop-up. Keytar post-ironic synth, Pinterest shabby chic Wes Anderson lomo sriracha fixie Marfa wayfarers trust fund. Gentrify letterpress typewriter Echo Park whatever. Neutra Banksy mlkshk before they sold out. Photo booth polaroid plaid, church-key salvia Blue Bottle art party. Gastropub banjo blog stumptown, mixtape fingerstache pork belly pug fashion axe salvia paleo pop-up McSweeney\'s Bushwick.';
        $post->user_id = '3';
        $post->save();
    }

}




?>
