<?php

namespace Bstools\Renderer;

class Metric implements RendererInterface
{
    /**
     * @return string
     */
    public function render(array $data)
    {
        $output = ['current-jobs-urgent,current-jobs-ready,current-jobs-reserved,current-jobs-delayed,current-jobs-buried,total-jobs,current-waiting'];

        foreach ($data as $tubeName => $tubeInfo) {
            $metric = $tubeName . ",";
            foreach ($tubeInfo as $tubeMetricName => $tubeMetricValue) {
                $metric.= $tubeMetricValue . ",";
            }

            $output[] = substr($metric, 0, -1);
        }

        return implode("\n", $output);
    }
}
