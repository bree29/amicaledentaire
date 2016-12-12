# amicaledentaire

## Installation
Download makegallery and put it in your path
    wget https://raw.githubusercontent.com/bree29/amicaledentaire/master/makegallery
    mkdir -p ".bashscripts"
    mv makegallery $HOME/.bashscripts/makegallery
    chmod +x "$HOME/.bashscripts/makegallery"
    echo "export PATH=\"$HOME/.bashscripts:$PATH\"" >> ~/.bashrc && source ~/.bashrc

And the template file in .makegallery in $HOME
    wget https://raw.githubusercontent.com/bree29/amicaledentaire/master/template/templategallery.php
    mkdir -p ".makegallery"
    mv templategallery.php "$HOME/.makegallery/templategallery.php
