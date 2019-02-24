import React from 'react'

export default function ({pagination, handlePageChange}) {

  const {next_page_url, prev_page_url} = pagination;

  const disabledNext = !!next_page_url ? '' : 'disabled';
  const disabledPrev = !!prev_page_url ? '' : 'disabled';

  return <nav aria-label="Page navigation example">
    <ul className="pagination justify-content-center">
      <li className={`page-item ${disabledPrev}`}>
        <button disabled={!prev_page_url} className="page-link" tabIndex="-1" onClick={() => handlePageChange(pagination.current_page - 1)}>Previous</button>
      </li>
      <li className={`page-item ${disabledNext}`}>
        <button disabled={!next_page_url} className="page-link"
                onClick={() => handlePageChange(pagination.current_page + 1)}>Next
        </button>
      </li>
    </ul>
  </nav>
}
