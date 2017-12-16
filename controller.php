<?php
    $show = isset($_GET['show']) ? $_GET['show']: 0;
    $hidden = isset($_GET['hidden']) ? $_GET['hidden']: '';

    // helper func
    function debug_to_console($data)
    {
        $output = $data;
        if (is_array($output)) {
            $output = implode(',', $output);
        }
  
        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }
    // ---

    function stateChange($show, $n)
    {
        return  $show == 0 ? $n :  $show.$n;
    }

    if (isset($_GET['0'])) {
        $show = stateChange($show, '');
    } elseif (isset($_GET['1'])) {
        $show = stateChange($show, "1");
    } elseif (isset($_GET['2'])) {
        $show = stateChange($show, "2");
    } elseif (isset($_GET['3'])) {
        $show = stateChange($show, "3");
    } elseif (isset($_GET['4'])) {
        $show = stateChange($show, "4");
    } elseif (isset($_GET['5'])) {
        $show = stateChange($show, "5");
    } elseif (isset($_GET['6'])) {
        $show = stateChange($show, "6");
    } elseif (isset($_GET['7'])) {
        $show = stateChange($show, "7");
    } elseif (isset($_GET['8'])) {
        $show = stateChange($show, "8");
    } elseif (isset($_GET['9'])) {
        $show =  stateChange($show, "9");
    } elseif (isset($_GET['+'])) {
        $show = stateChange($show, "+");
    } elseif (isset($_GET['-'])) {
        $show =  stateChange($show, "-");
    } elseif (isset($_GET['*'])) {
        $show = stateChange($show, "*");
    } elseif (isset($_GET['/'])) {
        $show =  stateChange($show, "/");
    } elseif (isset($_GET['='])) {
        eval('$result = (' . $show. ');');
        $show = $result;
    } elseif (isset($_GET['clear'])) {
        $show = '';
    }
