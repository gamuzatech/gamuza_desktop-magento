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

