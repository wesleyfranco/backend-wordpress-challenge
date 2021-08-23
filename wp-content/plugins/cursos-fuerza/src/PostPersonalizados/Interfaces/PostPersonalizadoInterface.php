<?php 

namespace Fuerza\PostPersonalizados\Interfaces;

interface PostPersonalizadoInterface
{

    public function recuperarTipoPost() : string;

    public function recuperarNome() : string;

    public function recuperarNomeSingular() : string;

    public function recuperarPublico() : bool;

    public function recuperarTemArquivo() : bool;

    public function recuperarCamposSuportados() : array;

}