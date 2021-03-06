<?php

namespace App;

use PDF;

class PdfHomologacion extends PDF
{
    //Page header
    public function Header() {
        // Position at 15 mm from bottom
        //$this::SetY(-15);
        // Set font
        $this::SetFont('helvetica', 'I', 8);
        // Page number
        $this::Cell(0, 10, 'Título', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this::SetY(-15);
        // Set font
        $this::SetFont('helvetica', 'I', 8);
        // Page number
        $this::Cell(0, 10, 'Page '.$this::getAliasNumPage().'/'.$this::getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
