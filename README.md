<h1>Módulo de Componentes Desktop</h1>

**Compatível com a plataforma Magento CE versão 1.6 a 1.9**

Construa aplicações desktop poderosas utilizando a simplicidade do motor gráfico GTK e a flexibilidade da plataforma Magento.

<img src="https://dl.dropboxusercontent.com/s/00vfhq2z7jvc4o4/gamuza-desktop-box.png" alt="" title="Gamuza Desktop - Magento - Box" />

<h2>Instalação</h2>

<img src="https://dl.dropboxusercontent.com/s/pqpp0x62kqov683/sempre-faca-backup.png" alt="" title="Atenção! Sempre faça um backup da sua loja antes de realizar qualquer modificação!" />

**Instalar usando o modgit:**

    $ cd /path/to/magento
    $ modgit init
    $ modgit add gamuza_desktop https://github.com/gamuzabrasil/gamuza_desktop-magento.git

**Instalação manual dos arquivos**

Baixe a ultima versão aqui do pacote Gamuza_Desktop-xxx.tbz2 e descompacte o arquivo baixado para dentro do diretório principal do Magento

<img src="https://dl.dropboxusercontent.com/s/ir2vm6cyo3gl1v8/pos-instalacao.png" alt="Após a instalação, limpe os caches, rode a compilação, faça logout e login." title="Após a instalação, limpe os caches, rode a compilação, faça logout e login." />

<h2>Conhecendo o módulo</h2>

**Exemplo de Janela usando arquivo .dfm**

<img src="https://dl.dropboxusercontent.com/s/mg5tk5j54hqeso2/gamuza-desktop-example.png" alt="" title="Gamuza Desktop - Magento - Captura de Tela" />

**Suporte a arquivos de formulário do Delphi (DFM)**

    object Welcome : Gamuza_Desktop_Widget_Welcome
        BorderWidth = 70
        Title = 'Gamuza Desktop'
        Height = 480
        Width = 640
        OnCloseQuery = WelcomeCloseQuery
        OnShow = WelcomeShow
        object Button1 : TButton
            OnClicked = Button1OnClick
            object Label1 : TLabel
                Text = 'Welcome!'
            end
        end
        object Image1 : TImage
        end
    end

**Código-Fonte da Janela de Exemplo**

    class Gamuza_Desktop_Widget_Welcome extends TForm
    {
        /**
         * Form
         */
        const DFM_FILE = 'Welcome.dfm';

        /**
         * Components
         */
        public $Button1;
        public $Label1;
        public $Image1;

        /**
         * Events
         */
        public function OnLoaded ()
        {
            $this->Title = sprintf ("%s - %s - %s", $this->Owner->Title,
                $this->Owner->Description, $this->Owner->Version);
        }

        public function WelcomeCloseQuery (TObject $sender, stdClass $canClose)
        {
            $response = $this->Owner->MessageBox ($this->__('Quit from Gamuza Desktop?'), $this->Title, btnYesNo, msgQuestion);

            if ($response == resYes) $this->Owner->Terminate ();
            else $canClose->value = false;
        }

        public function WelcomeShow (TObject $sender)
        {
            $this->Image1->FromFile = Mage::getConfig ()->GetImageFileName ('logo.png');
        }

        public function Button1OnClick (TObject $sender)
        {
            $this->Owner->MessageBox ($this->__('Hello World!'), $this->Title, btnOkCancel, msgInfo);
        }
    }
