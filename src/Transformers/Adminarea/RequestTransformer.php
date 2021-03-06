<?php

declare(strict_types=1);

namespace Cortex\Statistics\Transformers\Adminarea;

use Rinvex\Support\Traits\Escaper;
use Rinvex\Statistics\Models\Request;
use League\Fractal\TransformerAbstract;

class RequestTransformer extends TransformerAbstract
{
    use Escaper;

    /**
     * Transform request model.
     *
     * @param \Rinvex\Statistics\Models\Request $request
     *
     * @return array
     */
    public function transform(Request $request): array
    {
        return $this->escape([
            'user' => (string) $request->user,
            'session_id' => (string) $request->session_id,
            'status_code' => (string) $request->status_code,
            'method' => (string) $request->method,
            'protocol_version' => (string) $request->protocol_version,
            'referer' => (string) $request->referer,
            'language' => (string) $request->language,
            'is_no_cache' => (bool) $request->is_no_cache,
            'wants_json' => (bool) $request->wants_json,
            'is_secure' => (bool) $request->is_secure,
            'is_json' => (bool) $request->is_json,
            'is_ajax' => (bool) $request->is_ajax,
            'is_pjax' => (bool) $request->is_pjax,
            'created_at' => (string) $request->created_at,
        ]);
    }
}
