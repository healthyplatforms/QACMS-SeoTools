<?php 
class PingComponent extends Component {

    public function main(&$Controller) {
        if (!isset($Controller->data['Tool']['url'])) {
            return false;
        }

        $results = $this->BaseTools->ping($Controller->data['Tool']['url']);

        return $results;
    }
}