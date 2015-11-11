<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Repositories\Frontend\Dmr\DmrRepository;
use App\Models\Dmr;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class DmrAPIController extends AppBaseController
{
	/** @var  DmrRepository */
	private $dmrRepository;

	function __construct(DmrRepository $dmrRepo)
	{
		$this->dmrRepository = $dmrRepo;
	}

	/**
	 * Display a listing of the Dmr.
	 * GET|HEAD /dmrs
	 *
	 * @return Response
	 */
	public function index()
	{
		$dmrs = $this->dmrRepository->all();

		return $this->sendResponse($dmrs->toArray(), "Dmrs retrieved successfully");
	}

	/**
	 * Show the form for creating a new Dmr.
	 * GET|HEAD /dmrs/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Dmr in storage.
	 * POST /dmrs
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Dmr::$rules) > 0)
			$this->validateRequestOrFail($request, Dmr::$rules);

		$input = $request->all();

		$dmrs = $this->dmrRepository->create($input);

		return $this->sendResponse($dmrs->toArray(), "Dmr saved successfully");
	}

	/**
	 * Display the specified Dmr.
	 * GET|HEAD /dmrs/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$dmr = $this->dmrRepository->apiFindOrFail($id);

		return $this->sendResponse($dmr->toArray(), "Dmr retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Dmr.
	 * GET|HEAD /dmrs/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Dmr in storage.
	 * PUT/PATCH /dmrs/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Dmr $dmr */
		$dmr = $this->dmrRepository->apiFindOrFail($id);

		$result = $this->dmrRepository->updateRich($input, $id);

		$dmr = $dmr->fresh();

		return $this->sendResponse($dmr->toArray(), "Dmr updated successfully");
	}

	/**
	 * Remove the specified Dmr from storage.
	 * DELETE /dmrs/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->dmrRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Dmr deleted successfully");
	}
}
