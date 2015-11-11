<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Repositories\Frontend\Workorder\WorkorderRepository;
use App\Models\Workorder;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class WorkorderAPIController extends AppBaseController
{
	/** @var  WorkorderRepository */
	private $workorderRepository;

	function __construct(WorkorderRepository $workorderRepo)
	{
		$this->workorderRepository = $workorderRepo;
	}

	/**
	 * Display a listing of the Workorder.
	 * GET|HEAD /workorders
	 *
	 * @return Response
	 */
	public function index()
	{
		$workorders = $this->workorderRepository->all();

		return $this->sendResponse($workorders->toArray(), "Workorders retrieved successfully");
	}

	/**
	 * Show the form for creating a new Workorder.
	 * GET|HEAD /workorders/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Workorder in storage.
	 * POST /workorders
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Workorder::$rules) > 0)
			$this->validateRequestOrFail($request, Workorder::$rules);

		$input = $request->all();

		$workorders = $this->workorderRepository->create($input);

		return $this->sendResponse($workorders->toArray(), "Workorder saved successfully");
	}

	/**
	 * Display the specified Workorder.
	 * GET|HEAD /workorders/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$workorder = $this->workorderRepository->apiFindOrFail($id);

		return $this->sendResponse($workorder->toArray(), "Workorder retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Workorder.
	 * GET|HEAD /workorders/{id}/edit
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
	 * Update the specified Workorder in storage.
	 * PUT/PATCH /workorders/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Workorder $workorder */
		$workorder = $this->workorderRepository->apiFindOrFail($id);

		$result = $this->workorderRepository->updateRich($input, $id);

		$workorder = $workorder->fresh();

		return $this->sendResponse($workorder->toArray(), "Workorder updated successfully");
	}

	/**
	 * Remove the specified Workorder from storage.
	 * DELETE /workorders/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->workorderRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Workorder deleted successfully");
	}
}
