<?php
require_once DOMPDF . 'autoload.inc.php';
require_once MODELS . "Demande.model.php";

use Dompdf\Dompdf;

class Exports
{
    private $models, $id, $html = null;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setHTML($html)
    {
        $this->html = $html;
    }
    public function export()
    {
        $this->models = new Demandes($this->id);
        $this->models = $this->models->one();

        $html = "<!DOCTYPE html>";
        $html .= "<html lang=\"fr\">";
        $html .= "<head>";
        $html .= "<meta charset=\"UTF-8\">";
        $html .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
        $html .= "<title>Document</title>";
        $html .= "<style>";
        $html .= "body{";
        $html .= "background-color:white;";
        $html .= "margin:0;";
        $html .= "padding:5px;";
        $html .= "border:1px double black;";
        $html .= "}";
        $html .= "#titre{";
        $html .= "text-align:center;";
        $html .= "color:gray;";
        $html .= "}";
        $html .= "img{";
        $html .= "width:15%;";
        $html .= "}";
        $html .= "h4{";
        $html .= "width:70%;";
        $html .= "margin:0px 70px;";
        $html .= "}";
        $html .= "</style>";
        $html .= "</head>";
        $html .= "<body>";
        $html .= "<header style='margin-left:60px'>";
        $html .= "<table>";
        $html .= "<th>";
        $html .= "<td style='margin-left:20px;'>";
        $path = PUBLICS_FRONT_IMG . 'ispm.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $html .= "<img src='$base64'/>";
        $html .= "</td>";
        $html .= "<td><h4 id=\"titre\">CORRESPONDANCE RAPIDE</h4></td>";
        $html .= "<td>";
        $path = PUBLICS_FRONT_IMG . 'aro.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $html .= "<img src='$base64'/>";
        $html .= "</td>";
        $html .= "</th>";
        $html .= "</table>";
        $html .= "</header>";
        $html .= "<hr>";
        $html .= "<div style=''>";
        $html .= "<div style='width:50%;display:inline-block;vertical-align: top;'>";
        $html .= "<p style='margin:0;'><span>Demandeur : </span>" . $this->models->nom . "</p><p style='margin:0;'><span>Département : </span>" . $this->models->departement . "</p><p style='margin:0;'><span>Date :</span>" . $this->models->date . "</p>";
        $html .= "</div>";
        $html .= "<div style='width:45%;display:inline-block;padding:10px;vertical-align:top;'>";
        $html .= "<p style='margin:0;'><span>Destinataire : </span>Finance et comptabilité</p><p style='margin:0;'><span>Date : </span>" . date("Y-m-d H:i:s") . "</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "<hr>";
        $html .= "<div style=''>";
        $html .= "<div style='width:50%;height:100vh;display:inline-block;border-right:1px solid gray;vertical-align: top;'>";
        $html .= "<p><u>Motif : </u>".$this->models->motif."</p>";
        $html .= "</div>";
        $html .= "<div style='width:45%;display:inline-block;padding:10px;vertical-align:top;'>";
        $html .= "<p><u>Partie exclusivement réservée à la réponse : </u></p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "<div style='position:fixed;bottom:120px;'>";
        $html .= "<p style=''><u>Signature : </u></p>";
        $html .= "<table>";
        $html .= "<th>";
        $html .= "<td style=''>";
        $path = PUBLICS_FRONT_IMG . 's1.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $html .= "<img  style='width:10%;' src='$base64'/>";
        $html .= "</td>";
        $html .= "<td style=''>";
        $path = PUBLICS_FRONT_IMG . 's2.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $html .= "<img style='width:10%;' src='$base64'/>";
        $html .= "</td>";
        $html .= "<td style=''>";
        $path = PUBLICS_FRONT_IMG . 's3.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $html .= "<img style='width:10%;' src='$base64'/>";
        $html .= "</td>";
        $html .= "</th>";
        $html .= "</table>";
        $html .= "<div>";

        $html .= "</body>";
        $html .= "</html>";
        // $this->getDemande();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A5', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
    private function getDemande()

    {
        $this->models = new Demandes($this->id);
        $this->models = $this->models->one();
    }
}