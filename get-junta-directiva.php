<?php

require_once('./models/OrganizationModel.php');

$organizationModel = new OrganizationModel();
echo json_encode($organizationModel->getJuntaDirectiva());
?>