<?php
/** Spanish (español)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = array(
	NS_MEDIA            => 'Medio',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discusión',
	NS_USER             => 'Usuario',
	NS_USER_TALK        => 'Usuario_discusión',
	NS_PROJECT_TALK     => '$1_discusión',
	NS_FILE             => 'Archivo',
	NS_FILE_TALK        => 'Archivo_discusión',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_discusión',
	NS_TEMPLATE         => 'Plantilla',
	NS_TEMPLATE_TALK    => 'Plantilla_discusión',
	NS_HELP             => 'Ayuda',
	NS_HELP_TALK        => 'Ayuda_discusión',
	NS_CATEGORY         => 'Categoría',
	NS_CATEGORY_TALK    => 'Categoría_discusión',
);

$namespaceAliases = array(
	'Imagen' => NS_FILE,
	'Imagen_Discusión' => NS_FILE_TALK,
);

$namespaceGenderAliases = array(
	NS_USER => array( 'male' => 'Usuario', 'female' => 'Usuaria' ),
	NS_USER_TALK => array( 'male' => 'Usuario_Discusión', 'female' => 'Usuaria_Discusión' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'UsuariosActivos' ),
	'Allmessages'               => array( 'TodosLosMensajes', 'Todos_los_mensajes' ),
	'AllMyUploads'              => array( 'TodasMisSubidas', 'Todas_mis_subidas', 'TodosMisArchivos', 'Todos_mis_archivos' ),
	'Allpages'                  => array( 'Todas', 'Todas_las_páginas' ),
	'Ancientpages'              => array( 'PáginasAntiguas', 'Páginas_antiguas' ),
	'Badtitle'                  => array( 'Título_incorrecto' ),
	'Blankpage'                 => array( 'Blanquear_página', 'PáginaEnBlanco', 'BlanquearPágina', 'Página_en_blanco' ),
	'Block'                     => array( 'Bloquear' ),
	'Booksources'               => array( 'FuentesDeLibros', 'Fuentes_de_libros' ),
	'BrokenRedirects'           => array( 'RedireccionesRotas', 'Redirecciones_rotas' ),
	'Categories'                => array( 'Categorías' ),
	'ChangeEmail'               => array( 'Cambiar_correo_electrónico', 'CambiarEmail', 'CambiarCorreo' ),
	'ChangePassword'            => array( 'Cambiar_contraseña', 'CambiarContraseña', 'ResetearContraseña', 'Resetear_contraseña' ),
	'ComparePages'              => array( 'Comparar_páginas', 'CompararPáginas' ),
	'Confirmemail'              => array( 'Confirmar_correo_electrónico', 'ConfirmarEmail' ),
	'Contributions'             => array( 'Contribuciones' ),
	'CreateAccount'             => array( 'Crear_una_cuenta', 'CrearCuenta' ),
	'Deadendpages'              => array( 'PáginasSinSalida', 'Páginas_sin_salida' ),
	'DeletedContributions'      => array( 'ContribucionesBorradas', 'Contribuciones_borradas', 'Contribuciones_Borradas' ),
	'DoubleRedirects'           => array( 'RedireccionesDobles', 'Redirecciones_dobles' ),
	'EditWatchlist'             => array( 'EditarSeguimiento' ),
	'Emailuser'                 => array( 'Enviar_correo_electrónico', 'MandarEmailUsuario' ),
	'ExpandTemplates'           => array( 'Sustituir_plantillas', 'Sustituidor_de_plantillas', 'Expandir_plantillas' ),
	'Export'                    => array( 'Exportar' ),
	'Fewestrevisions'           => array( 'MenosEdiciones', 'Menos_ediciones' ),
	'FileDuplicateSearch'       => array( 'BuscarArchivosDuplicados', 'Buscar_archivos_duplicados' ),
	'Filepath'                  => array( 'RutaDeArchivo', 'Ruta_de_archivo' ),
	'Import'                    => array( 'Importar' ),
	'Invalidateemail'           => array( 'Invalidar_correo_electrónico', 'InvalidarEmail' ),
	'JavaScriptTest'            => array( 'PruebaJavaScript' ),
	'BlockList'                 => array( 'UsuariosBloqueados', 'Lista_de_usuarios_bloqueados' ),
	'LinkSearch'                => array( 'BúsquedaDeEnlaces', 'Búsqueda_de_enlaces' ),
	'Listadmins'                => array( 'ListaDeAdministradores', 'Lista_de_administradores' ),
	'Listbots'                  => array( 'ListaDeBots', 'Lista_de_bots' ),
	'Listfiles'                 => array( 'ListaImágenes', 'Lista_de_imágenes' ),
	'Listgrouprights'           => array( 'ListaDerechosGrupos', 'Derechos_de_grupos_de_usuarios' ),
	'Listredirects'             => array( 'TodasLasRedirecciones', 'Todas_las_redirecciones' ),
	'Listusers'                 => array( 'ListaUsuarios', 'Lista_de_usuarios' ),
	'Lockdb'                    => array( 'BloquearBasedeDatos', 'Bloquear_base_de_datos' ),
	'Log'                       => array( 'Registro' ),
	'Lonelypages'               => array( 'PáginasHuérfanas', 'Páginas_huérfanas' ),
	'Longpages'                 => array( 'PáginasLargas', 'Páginas_largas' ),
	'MergeHistory'              => array( 'FusionarHistorial', 'Fusionar_historial' ),
	'MIMEsearch'                => array( 'BuscarPorMIME', 'Buscar_por_MIME' ),
	'Mostcategories'            => array( 'MásCategorizadas', 'Más_categorizadas' ),
	'Mostimages'                => array( 'MásImágenes', 'Con_más_imágenes' ),
	'Mostinterwikis'            => array( 'MásInterwikis' ),
	'Mostlinked'                => array( 'MásEnlazados', 'Más_enlazados', 'MásEnlazadas' ),
	'Mostlinkedcategories'      => array( 'CategoríasMásUsadas', 'Categorías_más_usadas' ),
	'Mostlinkedtemplates'       => array( 'PlantillasMásUsadas', 'Plantillas_más_usadas' ),
	'Mostrevisions'             => array( 'MásEdiciones', 'Más_ediciones' ),
	'Movepage'                  => array( 'MoverPágina', 'Mover_página' ),
	'Mycontributions'           => array( 'MisContribuciones', 'Mis_contribuciones' ),
	'MyLanguage'                => array( 'MiIdioma', 'Mi_idioma' ),
	'Mypage'                    => array( 'MiPágina', 'Mi_página' ),
	'Mytalk'                    => array( 'MiDiscusión', 'Mi_discusión' ),
	'Myuploads'                 => array( 'MisArchivosSubidos' ),
	'Newimages'                 => array( 'NuevasImágenes', 'Nuevas_imágenes' ),
	'Newpages'                  => array( 'PáginasNuevas', 'Páginas_nuevas' ),
	'PasswordReset'             => array( 'RestablecerContraseña' ),
	'PermanentLink'             => array( 'EnlacePermanente' ),
	'Preferences'               => array( 'Preferencias' ),
	'Prefixindex'               => array( 'PáginasPorPrefijo', 'Páginas_por_prefijo' ),
	'Protectedpages'            => array( 'PáginasProtegidas', 'Páginas_protegidas' ),
	'Protectedtitles'           => array( 'TítulosProtegidos', 'Títulos_protegidos' ),
	'Randompage'                => array( 'Aleatoria', 'Aleatorio', 'Página_aleatoria' ),
	'RandomInCategory'          => array( 'Aleatorio_en_categoría', 'Aleatoria_en_categoría' ),
	'Randomredirect'            => array( 'RedirecciónAleatoria', 'Redirección_aleatoria' ),
	'Recentchanges'             => array( 'CambiosRecientes', 'Cambios_recientes' ),
	'Recentchangeslinked'       => array( 'CambiosEnEnlazadas', 'Cambios_en_enlazadas' ),
	'Redirect'                  => array( 'Redirigir' ),
	'ResetTokens'               => array( 'ReestablecerClaves' ),
	'Revisiondelete'            => array( 'BorrarRevisión', 'Borrar_revisión' ),
	'Search'                    => array( 'Buscar' ),
	'Shortpages'                => array( 'PáginasCortas', 'Páginas_cortas' ),
	'Specialpages'              => array( 'PáginasEspeciales', 'Páginas_especiales' ),
	'Statistics'                => array( 'Estadísticas' ),
	'Tags'                      => array( 'Etiquetas' ),
	'TrackingCategories'        => array( 'CategoríasDeSeguimiento' ),
	'Unblock'                   => array( 'Desbloquear' ),
	'Uncategorizedcategories'   => array( 'CategoríasSinCategorizar', 'Categorías_sin_categorizar' ),
	'Uncategorizedimages'       => array( 'ImágenesSinCategorizar', 'Imágenes_sin_categorizar' ),
	'Uncategorizedpages'        => array( 'PáginasSinCategorizar', 'Páginas_sin_categorizar' ),
	'Uncategorizedtemplates'    => array( 'PlantillasSinCategorizar', 'Plantillas_sin_categorizar' ),
	'Undelete'                  => array( 'Restaurar' ),
	'Unlockdb'                  => array( 'DesbloquearBasedeDatos', 'Desbloquear_base_de_datos' ),
	'Unusedcategories'          => array( 'CategoríasSinUso', 'Categorías_sin_uso' ),
	'Unusedimages'              => array( 'ImágenesSinUso', 'Imágenes_sin_uso' ),
	'Unusedtemplates'           => array( 'PlantillasSinUso', 'Plantillas_sin_uso' ),
	'Unwatchedpages'            => array( 'PáginasSinVigilar', 'Páginas_sin_vigilar' ),
	'Upload'                    => array( 'SubirArchivo', 'Subir_archivo' ),
	'UploadStash'               => array( 'ArchivosEscondidos', 'FicherosEscondidos' ),
	'Userlogin'                 => array( 'Entrar', 'Entrada_del_usuario' ),
	'Userlogout'                => array( 'Salida_del_usuario', 'Salir' ),
	'Userrights'                => array( 'PermisosUsuarios', 'Permisos_de_usuarios' ),
	'Version'                   => array( 'Versión' ),
	'Wantedcategories'          => array( 'CategoríasRequeridas', 'Categorías_requeridas' ),
	'Wantedfiles'               => array( 'ArchivosRequeridos', 'Archivos_requeridos' ),
	'Wantedpages'               => array( 'PáginasRequeridas', 'Páginas_requeridas' ),
	'Wantedtemplates'           => array( 'PlantillasRequeridas', 'Plantillas_requeridas' ),
	'Watchlist'                 => array( 'Seguimiento', 'Lista_de_seguimiento' ),
	'Whatlinkshere'             => array( 'LoQueEnlazaAquí', 'Lo_que_enlaza_aquí' ),
	'Withoutinterwiki'          => array( 'SinInterwikis', 'Sin_interwikis' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#REDIRECCIÓN', '#REDIRECCION', '#REDIRECT' ),
	'notoc'                     => array( '0', '__SIN_TDC__', '__NOTDC__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__SIN_GALERÍA__', '__NOGALERÍA__', '__NOGALERIA__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORZAR_TDC__', '__FORZARTDC__', '__FORZARTOC__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__TDC__', '__TOC__' ),
	'noeditsection'             => array( '0', '__NO_EDITAR_SECCIÓN__', '__NOEDITARSECCIÓN__', '__NOEDITARSECCION__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'MESACTUAL', 'MESACTUAL2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'MESACTUAL1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'MESACTUALCOMPLETO', 'NOMBREMESACTUAL', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'MESACTUALGENITIVO', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'MESACTUALABREVIADO', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'DÍAACTUAL', 'DIAACTUAL', 'DÍA_ACTUAL', 'DIA_ACTUAL', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'DÍAACTUAL2', 'DIAACTUAL2', 'DÍA_ACTUAL2', 'DIA_ACTUAL2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NOMBREDÍAACTUAL', 'NOMBREDIAACTUAL', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'AÑOACTUAL', 'AÑO_ACTUAL', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'HORA_MINUTOS_ACTUAL', 'HORAMINUTOSACTUAL', 'TIEMPOACTUAL', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'HORAACTUAL', 'HORA_ACTUAL', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MESLOCAL', 'MESLOCAL2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'MESLOCAL1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'MESLOCALCOMPLETO', 'NOMBREMESLOCAL', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'MESLOCALGENITIVO', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'MESLOCALABREVIADO', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'DÍALOCAL', 'DIALOCAL', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'DIALOCAL2', 'DÍALOCAL2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NOMBREDIALOCAL', 'NOMBREDÍALOCAL', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'AÑOLOCAL', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'HORAMINUTOSLOCAL', 'TIEMPOLOCAL', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'HORALOCAL', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'NÚMERODEPÁGINAS', 'NUMERODEPAGINAS', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NÚMERODEARTÍCULOS', 'NUMERODEARTICULOS', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NÚMERODEARCHIVOS', 'NUMERODEARCHIVOS', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NÚMERODEUSUARIOS', 'NUMERODEUSUARIOS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NÚMERODEUSUARIOSACTIVOS', 'NUMERODEUSUARIOSACTIVOS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NÚMERODEEDICIONES', 'NUMERODEEDICIONES', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'NOMBREDEPAGINA', 'NOMBREDEPÁGINA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NOMBREDEPAGINAC', 'NOMBREDEPÁGINAC', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ESPACIODENOMBRE', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ESPACIODENOMBREC', 'NAMESPACEE' ),
	'namespacenumber'           => array( '1', 'NÚMERODELESPACIO', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'ESPACIODEDISCUSION', 'ESPACIODEDISCUSIÓN', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'ESPACIODEDISCUSIONC', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ESPACIODEASUNTO', 'ESPACIODETEMA', 'ESPACIODEARTÍCULO', 'ESPACIODEARTICULO', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ESPACIODETEMAC', 'ESPACIODEASUNTOC', 'ESPACIODEARTICULOC', 'ESPACIODEARTÍCULOC', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'NOMBRECOMPLETODEPÁGINA', 'NOMBRECOMPLETODEPAGINA', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'NOMBRECOMPLETODEPAGINAC', 'NOMBRECOMPLETODEPÁGINAC', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NOMBREDESUBPAGINA', 'NOMBREDESUBPÁGINA', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NOMBREDESUBPAGINAC', 'NOMBREDESUBPÁGINAC', 'SUBPAGENAMEE' ),
	'rootpagename'              => array( '1', 'NOMBREDEPAGINARAIZ', 'NOMBREDEPÁGINARAÍZ', 'ROOTPAGENAME' ),
	'rootpagenamee'             => array( '1', 'NOMBREDEPAGINARAIZC', 'NOMBREDEPÁGINARAÍZC', 'ROOTPAGENAMEE' ),
	'basepagename'              => array( '1', 'NOMBREDEPAGINABASE', 'NOMBREDEPÁGINABASE', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NOMBREDEPAGINABASEC', 'NOMBREDEPÁGINABASEC', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NOMBREDEPÁGINADEDISCUSIÓN', 'NOMBREDEPAGINADEDISCUSION', 'NOMBREDEPAGINADISCUSION', 'NOMBREDEPÁGINADISCUSIÓN', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NOMBREDEPÁGINADEDISCUSIÓNC', 'NOMBREDEPAGINADEDISCUSIONC', 'NOMBREDEPAGINADISCUSIONC', 'NOMBREDEPÁGINADISCUSIÓNC', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NOMBREDEPAGINADETEMA', 'NOMBREDEPÁGINADETEMA', 'NOMBREDEPÁGINADEASUNTO', 'NOMBREDEPAGINADEASUNTO', 'NOMBREDEPAGINADEARTICULO', 'NOMBREDEPÁGINADEARTÍCULO', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NOMBREDEPAGINADETEMAC', 'NOMBREDEPÁGINADETEMAC', 'NOMBREDEPÁGINADEASUNTOC', 'NOMBREDEPAGINADEASUNTOC', 'NOMBREDEPAGINADEARTICULOC', 'NOMBREDEPÁGINADEARTÍCULOC', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'MSJ:', 'MSG:' ),
	'subst'                     => array( '0', 'SUST:', 'FIJAR:', 'SUBST:' ),
	'img_thumbnail'             => array( '1', 'miniaturadeimagen', 'miniatura', 'mini', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'miniaturadeimagen=$1', 'miniatura=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'derecha', 'dcha', 'der', 'right' ),
	'img_left'                  => array( '1', 'izquierda', 'izda', 'izq', 'left' ),
	'img_none'                  => array( '1', 'ninguna', 'nada', 'no', 'ninguno', 'none' ),
	'img_center'                => array( '1', 'centro', 'centrado', 'centrada', 'centrar', 'center', 'centre' ),
	'img_framed'                => array( '1', 'marco', 'enmarcado', 'enmarcada', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'sinmarco', 'sin_enmarcar', 'sinenmarcar', 'frameless' ),
	'img_lang'                  => array( '1', 'idioma=$1', 'lang=$1' ),
	'img_page'                  => array( '1', 'pagina=$1', 'página=$1', 'pagina_$1', 'página_$1', 'page=$1', 'page $1' ),
	'img_border'                => array( '1', 'borde', 'border' ),
	'img_top'                   => array( '1', 'arriba', 'top' ),
	'img_middle'                => array( '1', 'medio', 'middle' ),
	'img_bottom'                => array( '1', 'abajo', 'bottom' ),
	'img_link'                  => array( '1', 'vínculo=$1', 'vinculo=$1', 'enlace=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'NOMBREDELSITIO', 'SITENAME' ),
	'ns'                        => array( '0', 'EN:', 'NS:' ),
	'localurl'                  => array( '0', 'URLLOCAL:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'URLLOCALC:', 'LOCALURLE:' ),
	'articlepath'               => array( '0', 'RUTAARTÍCULO', 'RUTAARTICULO', 'ARTICLEPATH' ),
	'pageid'                    => array( '0', 'IDDEPÁGINA', 'IDPÁGINA', 'IDDEPAGINA', 'IDPAGINA', 'PAGEID' ),
	'server'                    => array( '0', 'SERVIDOR', 'SERVER' ),
	'servername'                => array( '0', 'NOMBRESERVIDOR', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'RUTASCRIPT', 'RUTADESCRIPT', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'RUTAESTILO', 'RUTADEESTILO', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'GRAMATICA:', 'GRAMÁTICA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GÉNERO:', 'GENERO:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__NOCONVERTIRTITULO__', '__NOCONVERTIRTÍTULO__', '__NOCT___', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__NOCONVERTIRCONTENIDO__', '__NOCC___', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'SEMANAACTUAL', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'DDSACTUAL', 'DIADESEMANAACTUAL', 'DÍADESEMANAACTUAL', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'SEMANALOCAL', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'DDSLOCAL', 'DIADESEMANALOCAL', 'DÍADESEMANALOCAL', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'IDDEREVISION', 'IDREVISION', 'IDDEREVISIÓN', 'IDREVISIÓN', 'REVISIONID' ),
	'revisionday'               => array( '1', 'DIADEREVISION', 'DIAREVISION', 'DÍADEREVISIÓN', 'DÍAREVISIÓN', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'DIADEREVISION2', 'DIAREVISION2', 'DÍADEREVISIÓN2', 'DÍAREVISIÓN2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'MESDEREVISION', 'MESDEREVISIÓN', 'MESREVISION', 'MESREVISIÓN', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'MESDEREVISION1', 'MESDEREVISIÓN1', 'MESREVISION1', 'MESREVISIÓN1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'AÑODEREVISION', 'AÑODEREVISIÓN', 'AÑOREVISION', 'AÑOREVISIÓN', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'MARCADEHORADEREVISION', 'MARCADEHORADEREVISIÓN', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'USUARIODEREVISION', 'USUARIODEREVISIÓN', 'REVISIONUSER' ),
	'revisionsize'              => array( '1', 'TAMAÑODEREVISIÓN', 'TAMAÑODEREVISION', 'REVISIONSIZE' ),
	'fullurl'                   => array( '0', 'URLCOMPLETA:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'URLCOMPLETAC:', 'FULLURLE:' ),
	'canonicalurl'              => array( '0', 'URLCANONICA:', 'CANONICALURL:' ),
	'canonicalurle'             => array( '0', 'URLCANONICAC:', 'CANONICALURLE:' ),
	'lcfirst'                   => array( '0', 'PRIMEROMINUS:', 'PRIMEROMINÚS:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'PRIMEROMAYUS:', 'PRIMEROMAYÚS:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'MINUS:', 'MINÚS:', 'LC:' ),
	'uc'                        => array( '0', 'MAYUS:', 'MAYÚS:', 'UC:' ),
	'raw'                       => array( '0', 'SINFORMATO:', 'SINPUNTOS:', 'RAW:' ),
	'displaytitle'              => array( '1', 'MOSTRARTÍTULO', 'MOSTRARTITULO', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'SF', 'R' ),
	'newsectionlink'            => array( '1', '__VINCULARANUEVASECCION__', '__ENLACECREARSECCIÓN__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__NOVINCULARANUEVASECCION__', '__SINENLACECREARSECCIÓN__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'VERSIONACTUAL', 'VERSIÓNACTUAL', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'CODIFICARURL:', 'URLENCODE:' ),
	'currenttimestamp'          => array( '1', 'MARCADEHORAACTUAL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'MARCADEHORALOCAL', 'LOCALTIMESTAMP' ),
	'language'                  => array( '0', '#IDIOMA:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'IDIOMADELCONTENIDO', 'IDIOMADELCONT', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'PÁGINASENESPACIO', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'NÚMEROADMINIISTRADORES', 'NÚMEROADMINS', 'NUMEROADMINS', 'NUMEROADMINISTRADORES', 'NUMERODEADMINISTRADORES', 'NUMERODEADMINS', 'NÚMERODEADMINISTRADORES', 'NÚMERODEADMINS', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATONÚMERO', 'FORMATONUMERO', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'RELLENARIZQUIERDA', 'RELLENARIZQ', 'PADLEFT' ),
	'padright'                  => array( '0', 'RELLENARDERECHA', 'RELLENARDER', 'PADRIGHT' ),
	'special'                   => array( '0', 'especial', 'special' ),
	'speciale'                  => array( '0', 'especialc', 'speciale' ),
	'defaultsort'               => array( '1', 'ORDENAR:', 'CLAVEDEORDENPREDETERMINADO:', 'ORDENDECATEGORIAPREDETERMINADO:', 'ORDENDECATEGORÍAPREDETERMINADO:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'RUTAARCHIVO:', 'RUTARCHIVO:', 'RUTADEARCHIVO:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'etiqueta', 'tag' ),
	'hiddencat'                 => array( '1', '__CATEGORÍAOCULTA__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'PÁGINASENCATEGORÍA', 'PÁGINASENCAT', 'PAGSENCAT', 'PAGINASENCATEGORIA', 'PAGINASENCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'TAMAÑOPÁGINA', 'TAMAÑODEPÁGINA', 'TAMAÑOPAGINA', 'TAMAÑODEPAGINA', 'PAGESIZE' ),
	'index'                     => array( '1', '__INDEXAR__', '__INDEX__' ),
	'noindex'                   => array( '1', '__NOINDEXAR__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'NÚMEROENGRUPO', 'NUMEROENGRUPO', 'NUMENGRUPO', 'NÚMENGRUPO', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__REDIRECCIÓNESTÁTICA__', '__REDIRECCIONESTATICA__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'NIVELDEPROTECCIÓN', 'NIVELDEPROTECCION', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'formatodefecha', 'formatearfecha', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'RUTA', 'PATH' ),
	'url_query'                 => array( '0', 'BÚSQUEDA', 'QUERY' ),
	'defaultsort_noreplace'     => array( '0', 'noreemplazar', 'noreplace' ),
	'pagesincategory_all'       => array( '0', 'todo', 'all' ),
	'pagesincategory_pages'     => array( '0', 'páginas', 'pages' ),
	'pagesincategory_subcats'   => array( '0', 'subcategorías', 'subcats' ),
	'pagesincategory_files'     => array( '0', 'archivos', 'files' ),
);

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'H:i j M Y',
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );
$linkTrail = '/^([a-záéíóúñ]+)(.*)$/sDu';

