<?php
echo $this->include('Layouts/Backend/_layout/_headScript');
echo $this->include('Layouts/Backend/_layout/_sidebar');
echo $this->include('Layouts/Backend/_layout/_navbar');
echo $this->include('Layouts/Backend/_layout/_header');
echo $this->renderSection('content');
echo $this->include('Layouts/Backend/_layout/_footer');
