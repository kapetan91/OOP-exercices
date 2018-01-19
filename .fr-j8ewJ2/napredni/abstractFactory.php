a<?php 
interface Button {
    public function paint();
}

class WindowsButton implements Button {
    public function paint() {
        echo "Windows Button";
    }
}

class MacOSButton implements Button{
    public function paint() {
        echo "macOS Button";
    }
}
interface ButtonFactory {
    public function makeButton(): Button;
}

class WindowsButtonFactory implements ButtonFactory {
    public function makeButton(): Button {
        return new WindowsButton();
    }
}

class MacOSButtonFactory implements ButtonFactory {
    public function makeButton(): Button {
        return new MacOSButton();
    }
}
