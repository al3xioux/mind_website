<?php 
    $stlsheet = "style/index.css";
    require "header.php";
?>
    <div class="certif">
        <img src="img/certif.png">
        <p>Certification <strong>PASSI</strong></p>
    </div>

    <!-- Présentation de l'entreprise -->

    <div class="presentation">
        <h1>Mind Technologies</h1>
        <p>Expert en cybersécurité,<br>Nous accompagnons depuis plus de 20 ans nos clients sur l'ensemble de leurs enjeux liés à la sécurisation de leur système d'information.</p>
    </div>

    <!-- Présentation des différentes offres proposées -->

    <h2 id="titre_offres">Nos Offres</h2>

    <div class="offres">

        <div class="box_offres">
            <div class="carte_offres">
                <a href="offres.php#audit">
                    <img src="img/audit.png" alt="audit">
                    <p>Audit - Conseil</p>
                </a>
            </div>
        </div>

        <div class="box_offres">
            <div class="carte_offres">
                <a href="offres.php#gestion">
                    <img src="img/projet.png" alt="projet">
                    <p>Gestion de projet - Integration</p>
                </a>
            </div>
        </div>

        <div class="box_offres">
            <div class="carte_offres">
                <a href="offres.php#infogerance">
                    <img src="img/infogerance.png" alt="infogerance">
                    <p> Infogerance - Services Manages</p>
                </a>
            </div>
        </div>

        <div class="box_offres">
            <div class="carte_offres">
                <a href="offres.php#datacenter">
                    <img src="img/datacenter.png" alt="datacenter">
                    <p>Data Center - SAAS</p>
                </a>
            </div>
        </div>

    </div>

    <!-- Information sur le type de client de l'entreprise -->

    <h2 id="titre_clients">Nos Clients</h2>

    <div class="clients">
        <img src="img/clients.png">
    </div>

    <!-- Présentation des partenaires qui suivent l'entreprise -->

    <h2 id="titre_partenaires">Nos Partenaires</h2>

    <div class="box_partenaires">
        <div class="carte_partenaires">
            <a target="_blanck" href="https://www.al-entreprise.com"><img src="img/logo/alcatel.png"></a>
        </div>
        <div class="carte_partenaires">
            <a target="_blanck" href="https://www.olfeo.com"><img src="img/logo/olfeo.png"></a>
        </div>
        <div class="carte_partenaires">
            <a target="_blanck" href="https://www.stormshield.com"><img src="img/logo/stormshield.png"></a>
        </div>
        <div class="carte_partenaires">
            <a target="_blanck" href="https://www.vadesecure.com"><img src="img/logo/vade.png"></a>
        </div>
        <div class="carte_partenaires">
            <a href="partenaires.php"><img src="img/fleche.png"></a>
        </div>

    </div>

<?php require "footer.php"; ?>