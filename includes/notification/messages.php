<?php

$message_same_state = <<<same_state
  $current_user_name vient de modifier l'article $article_title sans changer son état. Allez vite voir...\n
C'est là: $article_url.\n
A Bientôt,\n
Le Dioude.
same_state;

$message_prop = <<<proposed
L'article $article_title vient d'être proposé à la publication par $author_name.\n
Qu'il en soit remercié pour le temps qu'il contribue ainsi à faire gagner à ses collègues et à tous les AMUsagers.\n
N'hésitez pas à faire avancer le workflow en assurant une relecture.\n
Un petit pas pour la DOSI, mais à coup sûr un grand pas pour la qualité du service public français.\n
C'est là: $article_url. \n
Le Dioude.
proposed;

$message_relec1 = <<<relecture1
L'article $article_title de $author_name vient d'être passé dans l'état Relecture 1 ok par le relecteur $current_user_name.\n
C'est là: $article_url.\n
Merci de poursuivre l'effort en assurant la 2eme relecture, dernière étape avant publication.\n
Le Dioude.
relecture1;

$message_relec2 = <<<relecture2
L'article $article_title de $author_name vient d'être passé dans l'état Relecture 2 ok par le relecteur $current_user_name.\n
C'est là: $article_url.\n
El Dioudolo.
relecture2;

$message_pub = <<<published
L'article $article_title de $author_name vient d'être publié.\n
Un grand merci collectif à l'auteur $author_name.\n
La DOSI l'aime. Ses colllègues l'aiment. AMU entière l'aime. Gloire à toi $author_name !!!\n
Précipitez-vous: $article_url.\n
Merci à tous pour votre participation.\n
Le Dioude.
published;

$message_maj = <<<maj
L'article $article_title crée par $author_name nécessite une mise à jour.\n
Un cycle de relecture est nécessaire avant sa remise en publication.\n
C'est là: $article_url.\n
A Bientôt,\n
Le Dioude.
maj;
