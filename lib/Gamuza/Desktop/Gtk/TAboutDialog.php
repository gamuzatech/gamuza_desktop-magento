<?php
/**
 * @package     Gamuza_Desktop
 * @description Visual Component Library for Magento
 * @copyright   Copyright (c) 2017 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Library General Public
 * License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Library General Public License for more details.
 *
 * You should have received a copy of the GNU Library General Public
 * License along with this library; if not, write to the
 * Free Software Foundation, Inc., 51 Franklin St, Fifth Floor,
 * Boston, MA 02110-1301, USA.
 */

/**
 * See the AUTHORS file for a list of people on the Gamuza Team.
 * See the ChangeLog files for a list of changes.
 * These files are distributed with gamuza_desktop-magento at http://github.com/gamuzatech/.
 */

/**
 * Class TAboutDialog
 *
 * @property array     $Artists
 * @property array     $Authors
 * @property string    $Comments
 * @property string    $Copyright
 * @property array     $Documenters
 * @property callback  $EmailHook
 * @property string    $License
 * @property GdkPixbuf $Logo
 * @property string    $LogoIconName
 * @property string    $TranslatorCredits
 * @property callback  $UrlHook
 * @property string    $Version
 * @property string    $Website
 * @property string    $WebsiteLabel
 */
class TAboutDialog extends TDialog
{
    /**
     * Components
     */
    public $ActionArea;

    /**
     * Events
     */
    public $OnEmailClicked;
    public $OnUrlClicked;

    public function __construct ()
    {
        TBin::__construct ();

        $this->Handle = new GtkAboutDialog ();

        self::__gui ();

        self::__signal ();
    }

    public function __gui ()
    {
        TBin::__gui ();

        $this->Modal = true;

        $this->ActionArea = new THButtonBox ();
        $this->ActionArea->Handle = $this->Handle->action_area;

        foreach ($this->ActionArea->Handle->get_children () as $child)
        {
            $button = new TButton ();
            $button->Handle = $child;

            $child->set_data (self::TOBJECT, $button);
        }
    }

    public function __signal ()
    {
        parent::__signal ();

        foreach ($this->ActionArea->Handle as $child)
        {
            if ($child instanceof GtkButton) $child->connect ('clicked', function () { $this->Destroy (); });
        }

        $this->EmailHook = function ($object, $address) { if ($this->OnEmailClicked) $this->_call_user_func ($this, $this->OnEmailClicked, $address); };
        $this->UrlHook = function ($object, $address) { if ($this->OnUrlClicked) $this->_call_user_func ($this, $this->OnUrlClicked, $address); };
    }

    /**
     * Methods
     */
    public function GetArtists ()
    {
        return $this->Handle->get_artists ();
    }

    public function GetAuthors ()
    {
        return $this->Handle->get_authors ();
    }

    public function GetComments ()
    {
        return $this->Handle->get_comments ();
    }

    public function GetCopyright ()
    {
        return $this->Handle->get_copyright ();
    }

    public function GetDocumenters ()
    {
        return $this->Handle->get_documenters ();
    }

    public function GetLicense ()
    {
        return $this->Handle->get_license ();
    }

    public function GetLogo ()
    {
        return $this->Handle->get_logo ();
    }

    public function GetLogoIconName ()
    {
        return $this->Handle->get_logo_icon_name ();
    }

    public function GetTranslatorCredits ()
    {
        return $this->Handle->get_translator_credits ();
    }

    public function GetVersion ()
    {
        return $this->Handle->get_version ();
    }

    public function GetWebsite ()
    {
        return $this->Handle->get_website ();
    }

    public function GetWebsiteLabel ()
    {
        return $this->Handle->get_website_label ();
    }

    public function SetArtists (array $artists)
    {
        $this->Handle->set_artists ($artists);
    }

    public function SetAuthors (array $authors)
    {
        $this->Handle->set_authors ($authors);
    }

    public function SetComments (string $comments)
    {
        $this->Handle->set_comments ($this->latin1 ($comments));
    }

    public function SetCopyright (string $copyright)
    {
        $this->Handle->set_copyright ($this->latin1 ($copyright));
    }

    public function SetDocumenters (array $documenters)
    {
        $this->Handle->set_documenters ($documenters);
    }

    public function SetEmailHook (callback $callback)
    {
        $this->Handle->set_email_hook ($callback);
    }

    public function SetLicense (string $license)
    {
        $this->Handle->set_license ($this->latin1 ($license));
    }

    public function SetLogo (GdkPixbuf $logo)
    {
        $this->Handle->set_logo ($logo);
    }

    public function SetLogoIconName (string $icon_name)
    {
        $this->Handle->set_logo_icon_name ($icon_name);
    }

    /**
     * since GTK+ 2.12, please use GtkAboutDialog::set_program_name()
     */
    public function SetName (string $name)
    {
        $this->Handle->set_program_name ($name);
    }

    public function SetTranslatorCredits (string $translator_credits)
    {
        $this->Handle->set_translator_credits ($this->latin1 ($translator_credits));
    }

    public function SetUrlHook (callback $callback)
    {
        $this->Handle->set_url_hook ($callback);
    }

    public function SetVersion (string $version)
    {
        $this->Handle->set_version ($this->latin1 ($version));
    }

    public function SetWebsite (string $website)
    {
        $this->Handle->set_website ($website);
    }

    public function SetWebsiteLabel (string $website_label)
    {
        $this->Handle->set_website_label ($this->latin1 ($website_label));
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Artists':           { $result = $this->GetArtists ();           break; }
        case 'Authors':           { $result = $this->GetAuthors ();           break; }
        case 'Comments':          { $result = $this->GetComments ();          break; }
        case 'Copyright':         { $result = $this->GetCopyright ();         break; }
        case 'Documenters':       { $result = $this->GetDocumenters ();       break; }
        case 'License':           { $result = $this->GetLicense ();           break; }
        case 'Logo':              { $result = $this->GetLogo ();              break; }
        case 'LogoIconName':      { $result = $this->GetLogoIconName ();      break; }
        case 'TranslatorCredits': { $result = $this->GetTranslatorCredits (); break; }
        case 'Version':           { $result = $this->GetVersion ();           break; }
        case 'Website':           { $result = $this->GetWebsite ();           break; }
        case 'WebsiteLabel':      { $result = $this->GetWebsiteLabel ();      break; }
        default:                  { $result = parent::__get ($var);                  }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Artists':           { $this->SetArtists ($val);           break; }
        case 'Authors':           { $this->SetAuthors ($val);           break; }
        case 'Comments':          { $this->SetComments ($val);          break; }
        case 'Copyright':         { $this->SetCopyright ($val);         break; }
        case 'Documenters':       { $this->SetDocumenters ($val);       break; }
        case 'EmailHook':         { $this->SetEmailHook ($val);         break; }
        case 'License':           { $this->SetLicense ($val);           break; }
        case 'Logo':              { $this->SetLogo ($val);              break; }
        case 'LogoIconName':      { $this->SetLogoIconName ($val);      break; }
        case 'TranslatorCredits': { $this->SetTranslatorCredits ($val); break; }
        case 'UrlHook':           { $this->SetUrlHook ($val);           break; }
        case 'Version':           { $this->SetVersion ($val);           break; }
        case 'Website':           { $this->SetWebsite ($val);           break; }
        case 'WebsiteLabel':      { $this->SetWebsiteLabel ($val);      break; }
        default:                  { parent::__set ($var, $val);                }
        }
    }
}

